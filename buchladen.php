<?php
include_once './includes/core/db_adapter.php';
$dbAdapter = new \Buchladen\Core\DatabaseAdapter();

$title = 'Tabellenübersicht'; 
include 'includes/header.php'; 
?>

<div class="h-full flex flex-col">
    <div class="border-b-4 border-slate-200">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="m-8">

<?php
if (isset($_GET['table'])) {
    // Ein Tabellenname wurde in der URL angegeben. Zeige den Inhalt der Tabelle an.
    $table = $_GET['table'];
    $result = $dbAdapter->db_query("SELECT * FROM {$table}");

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
} else {
    // Kein Tabellenname wurde angegeben. Zeige die Übersichtsseite an.
    $result = $dbAdapter->db_query("SHOW TABLES");
    foreach ($result as $table) {
        // Erstelle einen Link für jede Tabelle.
        $tableName = $table["Tables_in_buchladen"];
        echo "<a href=\"?table={$tableName}\">{$tableName}</a><br><br>";
    }
}
?>

    </div>
</div>

<?php include 'includes/footer.php'; ?>