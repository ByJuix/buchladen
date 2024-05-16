<?php
    $title = 'Dashboard'; 
    include 'includes/header.php'; 
?>
<div class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-4xl font-bold mb-8">Dashboard</h1>
    <div class="flex space-x-4">
        <a href="#" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded">
            <i data-lucide="database" class="w-4 h-4"></i>
            Buchladen
        </a>
        <a href="#" class="flex items-center justify-center bg-blue-500 text-white px-4 py-2 rounded">
            <i data-lucide="album" class="w-4 h-4"></i>
            Nutzerhandbuch
        </a>
    </div>
</div>
<?php include 'includes/footer.php'; ?>