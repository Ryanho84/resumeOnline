<?php
$cvlist = unserialize( file_get_contents('./data.php'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css" media = "screen" type = "text/css">
    <title>简历列表</title>
    <script src = "main.js"></script>
</head>
<body>
    <div class="resume">
    <?php if( $cvlist && is_array( $cvlist)):?>
        <h2>简历列表</h2>
        <ul>
        <?php foreach( $cvlist as $key => $cv):?>
            <li><a target = "_blank" href="detail.php?id=<?=$key?>"><?=$cv['title']?></a></li>
        <?php endforeach;?>
        </ul>
        <?php else:?>
            <h2>还没有简历发布</h2>
        <?php endif; ?>
        <p><a href="publish.php">+发布简历</a></p>
    </div>
</body>
</html>