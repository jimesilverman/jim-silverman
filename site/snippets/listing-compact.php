<?php
    //$items = page('blog')->children()->visible()->sortBy('date', 'desc');
?>
<?php if (isset($items)): ?>
<section class="wrap-lg listing-compact">
    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <div class="item index">

                <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                <div class="image-listing">
                    <a href="<?= $item->url() ?>" class="al">
                        <img src="<?= thumb($image, array('width' => 400, 'height' => 225, 'crop' => true))->url() ?>" alt="<?= $item->title()->html() ?>" />
                    </a>
                </div>
                <?php endif; ?>

                <header>
                    <h3>
                        <a href="<?= $item->url() ?>" class="al"><?= $item->title()->html() ?></a>
                    </h3>
                </header>
                
                <div class="text">
                    <p>
                        <?= $item->text()->kirbytext()->excerpt(140, 'characters') ?>
                        <!--
                        <a href="<?= $item->url() ?>" class="al item-more">&rarr;</a>
                        -->
                    </p>
                </div>
<footer>
                    <div class="meta-container">
                        <p class="item-date">
                            <?= $item->date('F j, Y') ?>
                            <?php if( ( $item->date() == true ) && $item->tags()->isNotEmpty() ): ?>
                                &nbsp; <strong>&middot;</strong> &nbsp;
                            <?php endif; ?>
                            <?= $item->tags() ?>
                        </p>
                    </div>
                </footer>
                

            </div>

        <?php endforeach ?>
    <?php else: ?>
        <p>This blog does not contain any items yet.</p>
    <?php endif ?>

    <div class="cf"></div>
</section>
<?php endif; ?>
