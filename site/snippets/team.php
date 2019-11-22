<?php if (isset($items)): ?>
<div class="wrap">
    <h2>What I've Been Up To</h2>
    <hr/>
</div>
<section class="wrap team">

    <?php if($items->count()): ?>
        <?php foreach($items as $item): ?>

            <div class="item index">

                <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                <div class="image-listing floated">
                    <img src="<?= thumb($image, array('width' => 75, 'height' => 75, 'crop' => true))->url() ?>" alt="<?= $item->title()->html() ?>" />
                </div>
                <?php endif; ?>

                <header>
                    <h2><?= $item->title() ?>: <span><?= $item->position() ?></span></h2>
                </header>

                <div class="meta-container">
                    <p class="item-date">
                        <?= $item->date('M Y') ?>
                        <strong>&ndash;</strong>
                        <?php

                        $somedate = strtotime($item->dateEnd());

                        echo date('M Y', $somedate);

                        ?>
                    </p>
                </div>

                <div class="text">
                    <p>
                        <?= $item->about()->kirbytext() ?>
                    </p>
                </div>
<footer>
                    
                </footer>

                <hr/>
                

            </div>

        <?php endforeach ?>
    <?php else: ?>
        <p>This blog does not contain any items yet.</p>
    <?php endif ?>

    <div class="cf"></div>
</section>
<?php endif; ?>
