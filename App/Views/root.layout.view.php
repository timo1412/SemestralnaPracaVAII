<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <link rel="stylesheet" href="public/css/uvod.css">
    <script src="public/js/script.js"></script>
</head>
<body>

<header>
    <h1 class = "loho">Survival Jissen</h1>
    <input type="checkbox" id="nav-toggle" class="nav-toggle ">
    <nav>

        <ul>
            <li><a href="?c=home">Domov</a></li>
            <li><a href="?c=history">Registracia</a></li>
            <li><a href="?c=trening">Tréningy</a></li>
            <li><a href="?c=posts">Aktuality</a></li>
            <?php if ($auth->isLogged()) { ?>
            <li><a href="?c=auth&a=logout">Odhlasenie</a></li>
            <li><a href="#" ><?php echo $auth->getLoggedUserName()?> </a></li>
            <?php } else { ?>
                <li class="signName" ><a href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a></li>
            <?php } ?>
        </ul>

    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
</header>

<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
