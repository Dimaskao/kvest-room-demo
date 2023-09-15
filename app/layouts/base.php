
<!doctype html>
<html lang="uk" data-bs-theme="auto">
  <head>
    <script src="res/scripts/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kvestroom · <?= $this->title ?></title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="icon" href="res/images/favicon.ico">
    <meta name="theme-color" content="#712cf9">
    <link rel="stylesheet" href="res/styles/base.css">
    <link rel="stylesheet" href="<?= $this->style ?>">
  </head>
  <body>
  <?php include('app/fragments/svg.php') ?>
  <?php include('app/fragments/top.php') ?>
  <?php include('app/fragments/header.php') ?>
<main>
    <?php include($this->content) ?>
</main>
<?php include('app/fragments/footer.php') ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"></script>
<script src="res/scripts/base.js"></script>
</body>
</html>
