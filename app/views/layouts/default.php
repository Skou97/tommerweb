<!doctype html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <title>
        <?=$this->siteTitle();?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="<?=PROOT?>js/libs/jQuery-min.js"></script>

    <?= $this->content('head'); ?>
</head>

<body>
    <?= $this->content('body'); ?>
</body>

</html>