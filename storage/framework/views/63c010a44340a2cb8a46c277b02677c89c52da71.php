<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <h1><?php echo $__env->yieldContent('title'); ?></h1>
    <?php $__env->startSection('menubar'); ?>
    <h2 class="menutitle">※メニュー</h2>
    <ul>
        <li><?php echo $__env->yieldSection(); ?></li>
    </ul>
    <hr size="1">
    <div class="content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <div class="footer">
        <?php echo $__env->yieldContent('footer'); ?>
    </div>
</body>
</html>