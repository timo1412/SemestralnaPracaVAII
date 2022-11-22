<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semestralka</title>
    <link rel="stylesheet" href="public/css/uvod.css">
</head>
<body>

<form class="form" method="post" action="?c=posts&a=store">
    <?php /** @var \App\Models\Post $data */
    if ($data) { ?>
    <input type="hidden" name="id" value="<?php echo $data->getId() ?>">
    <?php } ?>
    <label>
        Text:
        <input type="text" name="text">
    </label>
    <input type="submit" value="Pridat">
</form>
</body>