<?php
include_once './includes/php/parsedown.php';
$Parsedown = new Parsedown();
$docs = file_get_contents('./docs.md');

$title = 'Nutzerhandbuch'; 
include 'includes/header.php'; 
?>


<div class="h-full flex flex-col">
    <div class="w-full border-b-4 border-slate-200 flex flex-row justify-between">
        <h1 class="text-2xl font-bold m-8 leading-none"><?php echo $title; ?></h1>
    </div>
    <div class="h-full p-8 ">
        <?php 
            echo $Parsedown->text($docs);
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
