<?php
include_once './includes/core/db_adapter.php';
$dbAdapter = new \Buchladen\Core\DatabaseAdapter();

$title = 'Tabellenübersicht'; 
include 'includes/header.php'; 
?>


<div class="h-full flex flex-col">
    <div class="w-full border-b-4 border-slate-200 flex flex-row justify-between">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
        <?php if (isset($_GET['table'])) echo "<button href='?table={$_GET['table']}&action=new' class='text-green-500 m-8' id='new_entry'><i data-lucide='circle-plus'></i></button>"; ?>
    </div>

<?php
$_GET['action'] ??= NULL;

switch ($_GET['action']) {
    case 'new':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['table'])) {
            $table = $_GET['table'];
            $columns = $dbAdapter->db_query("SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name = '{$table}'");
            $insertColumns = [];
            $insertValues = [];
    
            foreach ($columns as $column) {
                $columnName = $column['COLUMN_NAME'];
                if (isset($_POST[$columnName])) {
                    $insertColumns[] = $columnName;
                    $insertValues[] = $_POST[$columnName];
                }
            }
    
            if (!empty($insertColumns) && !empty($insertValues)) {
                $insertColumnsString = implode(', ', $insertColumns);
                // Format the values to be in quotes
                $insertValuesString = implode(', ', array_map(function($value) {
                    return "'{$value}'";
                }, $insertValues));
                $query = "INSERT INTO {$table} ({$insertColumnsString}) VALUES ({$insertValuesString})";
                $result = $dbAdapter->db_query($query);
            }
        }
        header("Location: buchladen.php?table={$_GET['table']}");

        break;
    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['table'])) {
            $table = $_GET['table'];
            $columns = $dbAdapter->db_query("SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name = '{$table}'");
            $updateColumns = [];
            $updateValues = [];
    
            foreach ($columns as $column) {
                $columnName = $column['COLUMN_NAME'];
                if (isset($_POST[$columnName])) {
                    $updateColumns[] = $columnName;
                    $updateValues[] = $_POST[$columnName];
                }
            }
    
            if (!empty($updateColumns) && !empty($updateValues)) {
                $updateColumnsString = implode(', ', $updateColumns);
                $updateValuesString = implode(', ', array_map(function($value) {
                    return "'{$value}'";
                }, $updateValues));
                $query = "UPDATE {$table} SET ";
                for ($i = 0; $i < count($updateColumns); $i++) {
                    $query .= "{$updateColumns[$i]} = '{$updateValues[$i]}'";
                    if ($i < count($updateColumns) - 1) {
                        $query .= ', ';
                    }
                }
                $query .= "WHERE {$_GET['table']}_id = {$_GET['id']}";
                $result = $dbAdapter->db_query($query);
            }
        }
        header("Location: buchladen.php?table={$_GET['table']}");
        break;
    case 'delete':
        $result = $dbAdapter->db_query("DELETE FROM {$_GET['table']} WHERE {$_GET['table']}_id = {$_GET['id']}");
        header("Location: buchladen.php?table={$_GET['table']}");
        
        break;
    default:
        if (isset($_GET['table'])) {
            // Get the column names
            $columns = $dbAdapter->db_query("SELECT COLUMN_NAME FROM information_schema.columns WHERE table_name = '{$_GET['table']}'");

            echo "<div class='new hidden invisible w-full p-8 border-b-4 border-slate-200 flex flex-row justify-between'><form action='?table={$_GET['table']}&action=new' method='post'>";

            // Create an input field for each column
            foreach ($columns as $column) {
                $columnName = $column['COLUMN_NAME'];
                echo "<input type='text' name='{$columnName}' placeholder='{$columnName}' class='px-4 py-2 bg-slate-200 rounded-full mr-4'>";
            }

            echo "<button class='text-green-500'><i data-lucide='check'></i></button>";

            echo "</form></div>";

            // Ein Tabellenname wurde in der URL angegeben. Zeige den Inhalt der Tabelle an.
            $result = NULL;
            $result = $dbAdapter->db_query("SELECT * FROM {$_GET['table']}");

            // Beginne die Tabelle und füge die Überschriften hinzu.
            echo "<div class='m-8'><table class='border-collapse table-fixed w-full text-left tablesorter' id='table'>";
            if (!empty($result)) {
                echo "<thead><tr>";
                foreach (array_keys($result[0]) as $columnName) {
                    // Ersetze Unterstriche durch Leerzeichen und mache den ersten Buchstaben groß.
                    $columnName = str_replace('_', ' ', $columnName);
                    $columnName = ucfirst($columnName);
                    echo "<th>{$columnName}</th>";
                }
                echo "</tr></thead><tbody>";

                // Füge die Datenzeilen hinzu.
                foreach ($result as $row) {
                    echo "<tr>";
                        $firstCell = null;
                        foreach ($row as $cell) {
                            if ($firstCell === null) {
                                $firstCell = $cell;
                            }
                            echo "<td>{$cell}</td>";
                        }
                        // Füge die erste Zelle am Ende der Zeile erneut hinzu.
                        echo "
                        <td class='flex fex-row'>
                            <a href='?table={$_GET['table']}&id={$firstCell}&action=delete' class='text-red-500 mr-4'><i data-lucide='circle-x'></i></a>
                            <a href='' class='text-yellow-500 edit-button'><i data-lucide='pencil'></i></a>
                        </td>
                    </tr>
                    <tr class='edit-row hidden'>
                        <td colspan='" . count($row) + 1 . "'>
                            <form action='?table={$_GET['table']}&id={$firstCell}&action=edit' method='post' class='flex flex-row'>
                                ";
                                foreach ($row as $columnName => $cell) {
                                    echo "<div class='input-field pr-4'><input type='text' name='{$columnName}' value='{$cell}' class='px-4 py-2 bg-slate-200 rounded-full w-full'></div>";
                                }
                                echo "
                                <div>
                                    <button type='submit' class='text-green-500 mr-4'><i data-lucide='check'></i></button>
                                    <button class='text-red-500 cancel-edit-button'><i data-lucide='circle-x'></i></button>
                                </div>
                            </form>
                        </td>
                    </tr>";                    
                }
            }
            echo <<<HTML
                </tbody></table></div>
                <script>
                    document.querySelectorAll('.edit-button').forEach(function(button) {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();
                            var editRow = this.parentNode.parentNode.nextElementSibling;
                            editRow.classList.remove('hidden');
                            var parentRow = this.parentNode.parentNode;
                            parentRow.classList.add('hidden');
                        });
                    });

                    document.querySelectorAll('.cancel-edit-button').forEach(function(button) {
                        button.addEventListener('click', function(event) {
                            event.preventDefault();
                            var editRow = this.parentNode.parentNode.parentNode.parentNode;
                            editRow.classList.add('hidden');
                            var originalRow = editRow.previousElementSibling;
                            originalRow.classList.remove('hidden');
                            var inputs = editRow.querySelectorAll('.input-field');
                            inputs.forEach(function(input) {
                                input.value = '';
                            });
                        });
                    });

                    window.onload = function() {
                        var ths = document.querySelectorAll('th');
                        var rows = document.querySelectorAll('.edit-row');
                        rows.forEach(function(row) {
                            var inputs = row.querySelectorAll('.input-field');
                            for (var i = 0; i < ths.length; i++) {
                                if (inputs[i]) {
                                    inputs[i].style.width = ths[i].offsetWidth + 'px';
                                }
                            }
                        });
                    }
                </script>
            HTML;

        } else {
            // Beginne die Tabelle und füge die Überschriften hinzu.
            echo "<div class='m-8'><table class='border-collapse table-auto w-full text-left'>";

            // Kein Tabellenname wurde angegeben. Zeige die Übersichtsseite an.
            $result = $dbAdapter->db_query("SHOW TABLES");
            foreach ($result as $table) {
                // Erstelle einen Link für jede Tabelle.
                $tableName = $table["Tables_in_buchladen"];
                // Wenn der Tabellenname "-has-" enthält, überspringe die Anzeige.
                if (strpos($tableName, '_has_') !== false) {
                    continue;
                }
                // Ersetze Unterstriche durch Leerzeichen und mache den ersten Buchstaben groß.
                $tableName = str_replace('_', ' ', $tableName);
                $tableName = ucfirst($tableName);
                echo "<a href=\"?table={$tableName}\">{$tableName}</a><br><br>";
            } 
            echo "</table></div>";
        }
        break;
}



?>
</div>
<script>
    document.getElementById('new_entry').addEventListener('click', function(event) {
        event.preventDefault();
        var newDiv = document.querySelector('.new');
        newDiv.classList.remove('hidden');
        newDiv.classList.remove('invisible');
    });
</script>

<?php include 'includes/footer.php'; ?>