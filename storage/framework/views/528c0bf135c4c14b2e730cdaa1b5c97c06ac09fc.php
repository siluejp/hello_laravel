<?php $__env->startSection('title', 'Index'); ?>
<?php $__env->startSection('menubar'); ?>
    ##parent-placeholder-b87313ea43ef51d84641be104c943962e1df3977##
    インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>ここが本文のコンテンツです。</p>
    <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは、<middleware>yahoo.com</middleware>へのリンクです。</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright &copy; 2025 My Company All rights reserved.
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.helloapp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>