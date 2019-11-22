<?php snippet('header') ?>

<?php snippet('intro') ?>

<?php snippet('slider') ?>

<div class="wrap-lg">
    <div class="row">

        <aside class="col-5">
            <div class="toc pinned"></div>
        </aside>

        <article class="article col-7">

            <div class="text">
                <?= $page->text()->kirbytext() ?>
            </div>

        </article>

    </div>
</div><!-- wrap -->

<?php snippet('footer') ?>
