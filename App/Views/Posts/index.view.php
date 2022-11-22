<?php
/** @var Post[] $data */
/** @var \App\Core\IAuthenticator $auth*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Semestralka</title>
        <link rel="stylesheet" href="public/css/uvod.css">
    </head>
<body>
    <div class="cards">
        <?php if ($auth->isLogged()) { ?>
        <a href="?c=posts&a=create" class="btn btn-success ">
            Pridat oznam
        </a>
        <?php } ?>

    </div>
<?php
foreach ($data as $post) {
?>
    <div class="card my-3">
    <div class="card-body">
        <?php if ($post->getAutor()) { ?>
        <h5 class="card-title"><?php echo $post->getAutor() ?>></h5>
        <?php } if ($post->getText()) { ?>
        <p class="card-text"><?php echo $post->getText() ?></p>
        <?php } ?>
        <?php if ($auth->isLogged()) { ?>
        <a href="?c=posts&a=edit&id=<?php echo $post->getId() ?>" class="btn btn-warning">Upravit</a>
        <?php } ?>

        <?php if ($auth->isLogged()) { ?>
            <a href="?c=posts&a=delete&id=<?php echo $post->getId() ?>" class="btn btn-warning">Zmazat</a>
        <?php } ?>

    </div>
    </div>
</body>
<?php } ?>