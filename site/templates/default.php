<?php snippet('header') ?>

<?php snippet('intro') ?>

<?php snippet('slider') ?>

<div class="wrap">

    <article class="article index">

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

    </article>

    <hr />

    <?php snippet('prevnext'); ?>

    <hr />
</div><!-- wrapper -->

<?php snippet('footer') ?>
