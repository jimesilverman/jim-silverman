<?php snippet('header') ?>

<div class="blog">

<header class="wrap">
    <div class="intro text">
        <h1><?= $page->title()->html() ?></h1>
        <?= $page->intro()->kirbytext() ?>
        <div class="meta-container">
            <p class="item-date"><?php echo $page->date('F d, Y') ?>&nbsp; <strong>·</strong> &nbsp; <?php echo $page->tags() ?></p>
        </div>
        <hr />
    </div>
</header>

<?php if( $image = $page->images()->find($page->coverimage()) ): ?>
<!--
<div class="cover-image">
    <img src="<?= $image->url() ?>" alt="" />
</div>
-->
<?php endif; ?>

<div class="wrap">
    <article class="article index">

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

    </article>

    <?php if( page('blog') ): ?>
        <?php if($page->hasNextVisible() ): ?>
            <strong>Read Next</strong> <br />
            <a href="<?= $page->nextVisible()->url(); ?>" class="h1"><?= $page->nextVisible()->title(); ?></a> &rarr;
        <?php else: ?>
            <strong>End.</strong> <br />
            <a href="<?= $site->url(); ?>" class="h1">Start over</a> &rarr;
        <?php endif; ?>
    <?php endif; ?>

<hr class="t2"/>

</div><!-- wrapper -->

</div>

<?php snippet('footer') ?>
