<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= assets('assets/bootstrap/css/bootstrap.min.css') ?>
    <link rel="icon" sizes="300x300" href="<?= assets('media/v1/favicon.png')?>" type="image/png"/>
    <title>Laventure</title>
</head>
<body>

<div class="container">

    <?php include(__DIR__ . '/partials/front/nav.php'); ?>

    {{ content }}

</div>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>