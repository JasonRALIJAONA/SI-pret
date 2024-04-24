<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <!-- <link href="/css/styles.css" rel="stylesheet" type="text/css" media="screen" /> -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <?php echo form_open('login/log'); ?>
        <h3>Connection</h3>

        <label for="username">Email</label>
        <input type="email" placeholder="Email" id="username" name="email">

        <label for="password">Mot de Passe</label>
        <input type="password" placeholder="Mot de passe" id="password" name="mdp">

        <button type="submit">Se connecter</button>

        <?php echo anchor('/login/inscription', 'S\'inscrire'); ?>

    <?php echo form_close(); ?>


</body>
</html>