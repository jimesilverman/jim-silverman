<?php
    //$items = page('blog')->children()->visible()->sortBy('date', 'desc');
?>
<?php if (isset($items)): ?>
<section class="wrap-lg listing-compact listing-new">
    
    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <div class="item index">

                <?php
                    $image = $item->coverimage()->toFile();
                    if( $image ) {
                        $imageURL = $image->url();
                    } else {
                        $image = $item->images()->sortBy('sort', 'asc')->first();
                        $imageURL = $image->url();
                    }
                ?>

                <div class="image-listing">
                    <a href="<?= $item->url() ?>" class="al">
                        <img src="<?= $imageURL ?>" alt="<?= $item->title()->html() ?>" />
                    </a>
                </div>

                <header>
                    <h2>
                        <a href="<?= $item->url() ?>" class="al"><?= $item->title()->html() ?></a>
                    </h2>
                </header>
                
                <div class="text">
                    <p>
                        <?= $item->intro()->kirbytext() ?>
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
