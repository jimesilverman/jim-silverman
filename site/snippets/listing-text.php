<?php if (isset($items)): ?>
<section class="wrap listing-text">
    <hr/>
    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <div class="item index">
                <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                <div class="columns">
                    <div class="image-listing">
                        <a href="<?= $item->url() ?>" class="al">
                            <img src="<?= thumb($image, array('width' => 800, 'height' => 450, 'crop' => true))->url() ?>" alt="<?= $item->title()->html() ?>" />
                        </a>
                    </div>
                </div>
                <?php endif; ?>

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

            <hr />

        <?php endforeach ?>
    <?php else: ?>
        <p>This blog does not contain any items yet.</p>
    <?php endif ?>
</section>
<?php endif; ?>
