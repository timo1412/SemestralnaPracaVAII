<?php /** @var \App\Core\IAuthenticator $auth */ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Semestralka</title>
    <link rel="stylesheet" href="public/css/uvod.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div>
                    Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!<br><br>
                    Táto časť aplikácie je prístupná len po prihlásení.
                </div>
            </div>
        </div>
    </div>
</body>