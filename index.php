<?php
    $title = 'Dashboard'; 
    include 'includes/header.php'; 
?>

<div class="h-full flex flex-col">
    <div class="border-b-4 border-slate-200">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="h-full flex items-center justify-center space-x-4">
        <a href="buchladen.php" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded">
            <i data-lucide="table" class="w-4 h-4 mr-2"></i>
            Buchladen
        </a>
        <a href="sql.php" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded">
            <i data-lucide="database" class="w-4 h-4 mr-2"></i>
            SQL-Statement
        </a>
        <a href="#" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded">
            <i data-lucide="album" class="w-4 h-4 mr-2"></i>
            Nutzerhandbuch
        </a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>