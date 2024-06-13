<?php
    $title = 'Dashboard'; 
    include 'includes/header.php'; 
?>

<div class="h-full flex flex-col">
    <div class="border-b-4 border-slate-200">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="h-full flex items-center justify-center space-x-8">
        <a href="buchladen.php" class="flex flex-col items-center justify-center bg-blue-500 text-white px-8 py-4 rounded-xl text-xl">
            <i data-lucide="table" class="w-32 h-32 mb-4"></i>
            Buchladen
        </a>
        <a href="sql.php" class="flex flex-col items-center justify-center bg-blue-500 text-white px-8 py-4 rounded-xl text-xl">
            <i data-lucide="database" class="w-32 h-32 mb-4"></i>
            SQL-Statement
        </a>
        <a href="docs.php" class="flex flex-col items-center justify-center bg-blue-500 text-white px-8 py-4 rounded-xl text-xl">
            <i data-lucide="album" class="w-32 h-32 mb-4"></i>
            Nutzerhandbuch
        </a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>