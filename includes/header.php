<?php
    $title = $title == '' ? 'Buchladen' : $title;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="./includes/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./includes/img/favicon.ico">
    <!-- <link rel="stylesheet" href="/includes/css/tailwind.css"> -->
    <script src="https://cdn.tailwindcss.com"></script> <!-- PlayCDN === REMOVE IN PRODUCTION === -->
</head>
<body class="bg-slate-200 h-screen overflow-hidden flex flex-col">
    <header>
        <nav class="p-4 pt-8">
            <div class="flex justify-between items-center">
                <a href="index.php" class="font-bold">
                    <img src="./includes/img/logo.png" alt="Buchladen" class="h-8">
                </a>
                <ul class="flex space-x-8 text-white">
                    <li><a href="index.php" class="px-4 py-2 bg-blue-500 rounded-full">Home</a></li>
                    <li><a href="buchladen.php" class="px-4 py-2 bg-blue-500 rounded-full">Buchladen</a></li>
                    <li><a href="sql.php" class="px-4 py-2 bg-blue-500 rounded-full">SQL-Statements</a></li>
                    <li><a href="nutzerhandbuch.php" class="px-4 py-2 bg-blue-500 rounded-full">Nutzerhandbuch</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="overflow-auto h-full rounded-[2rem] m-4 bg-white">