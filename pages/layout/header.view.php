<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0" name="viewport" />
    <title><?= $title_page ?? "Document" ?></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700;display=swap">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="<?=app()->getBasePath()?>pages/assets/css/normalize.css">
    <link rel="stylesheet" href="<?=app()->getBasePath()?>pages/assets/css/skeleton.css">
    <link rel="stylesheet" href="<?=app()->getBasePath()?>pages/assets/css/overide.css">
</head>
<body>
<?= view('layout/scripts') ?>
<div class="flex center-all">
    <div class="container">
        <div class="mt-3 mb-3">
