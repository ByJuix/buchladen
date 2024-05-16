<?php
include_once './includes/core/db_adapter.php';
$dbAdapter = new \Buchladen\Core\DatabaseAdapter();

$title = 'SQL-Statements'; 
include 'includes/header.php'; 
?>

<div class="h-full flex flex-col">
    <div class="border-b-4 border-slate-200">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="m-8">
        <form action='?post' method='post' class='flex flex-row mb-8'>
            <input type='text' name='statement' placeholder='Statement' class="w-1/2 px-4 py-2 bg-slate-200 rounded-full mr-4">
            <button type='submit' class="flex items-center justify-center bg-slate-200 hover:bg-blue-500 hover:text-white duration-300 rounded-full w-12 h-12"><i data-lucide='send-horizontal'></i></button>
        </form>

<?php
if (isset($_GET['post'])) {
    // Ein Tabellenname wurde in der URL angegeben. Zeige den Inhalt der Tabelle an.
    $statement = $_POST['statement'];
    $result = $dbAdapter->db_query("{$statement}");

    // Beginne die Tabelle und füge die Überschriften hinzu.
    echo "<table class='border-collapse table-auto w-full text-left'>";
    if (!empty($result)) {
        echo "<tr>";
        foreach (array_keys($result[0]) as $columnName) {
            // Ersetze Unterstriche durch Leerzeichen und mache den ersten Buchstaben groß.
            $columnName = str_replace('_', ' ', $columnName);
            $columnName = ucfirst($columnName);
            echo "<th>{$columnName}</th>";
        }
        echo "</tr>";

        // Füge die Datenzeilen hinzu.
        foreach ($result as $row) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>{$cell}</td>";
            }
            echo "</tr>";
        }
    }
    echo "</table>";
}
?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>