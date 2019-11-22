<?php if (isset($items)): ?>
<?php
    if ( $items->count() % 2 != 0 AND $site->grid()->value() == '2') {
        $oddClass = ' odd-items';
    } else {
        $oddClass = '';
    }
?>
<section class="section section-<?= $site->grid() . $oddClass ?> grid">
    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <?php
                $image = $item->coverimage()->toFile();
                if( $image ) {
                    $imageURL = $image->url();
                } else {
                    $image = $item->images()->sortBy('sort', 'asc')->first();
                    $imageURL = $image->url();
                }
            ?>

            <div class="item index item-<?= $item->griditem() ?> parallax-bgr <?php echo $item->mask(); ?>"
                style="background-image: url(<?= $imageURL ?>)">
                <a href="<?= $item->url() ?>" class="al">

                    <div class="wrap">
                        <header>
                            <h2>
                                <?= $item->title()->html() ?>
                            </h2>
                        </header>

                        <div class="meta-container">
                            <p class="item-date">
                                <?= $item->date('F j, Y') ?>
                                <?php if( ( $item->date() == true ) && $item->tags()->isNotEmpty() ): ?>
                                    &nbsp; <strong>&middot;</strong> &nbsp;
                                <?php endif; ?>
                                <?= $item->tags() ?>
                            </p>
                        </div>
                    </div>

                    <div class="mask <?php echo $item->mask() ?>"></div>
                    <div class="cf"></div>
                </a>
            </div>
        <?php endforeach ?>
    <?php else: ?>
        <p>This section does not contain any items yet :-(</p>
    <?php endif ?>
</section>
<?php endif; ?>
