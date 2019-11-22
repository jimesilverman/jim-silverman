<?php snippet('header') ?>

<?php snippet('intro') ?>

<?php if( $image = $page->images()->find($page->coverimage()) ): ?>
<div class="cover-image">
    <div class="wrap-lg">
        <img src="<?= $image->url() ?>" alt="" />
    </div>
</div>
<?php endif; ?>

<div class="results">
    <div class="wrap">

        <div class="text">
            <?= $page->text()->kirbytext() ?>
        </div>

	</div><!-- wrap -->
</div><!-- wrap -->

<?php
        // -------------------------------------------------
        // Project Entries
        // -------------------------------------------------

        // Select what type of content you'd like to display
        $items = page('about')->children()->visible()->sortBy('date', 'desc');

        // Select the listing view you'd like to use
        snippet('team',[ 'items' => $items ]);
    ?>



<?php snippet('footer') ?>
