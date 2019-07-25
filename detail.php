<?php
$id = intval( $_GET['id']);
$cvlist = unserialize( file_get_contents('./data.php'));
if( isset($cvlist[$id]))
    $data = $cvlist[$id];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['title'];?></title>
    <link rel="stylesheet" href="main.css"type = "text/css" media = "screen" />
    <script scr = "main.js"></script>
</head>
<body>
    <div class="resume">
        <h2><?=$data['title'];?></h2>
        <div class="content">
        <?=nl2br( $data['content']);?>
        </div>
    </div>
</body>
</html>
