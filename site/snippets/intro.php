<div class="intro">
    <div class="wrap">
        <?php if( ! $page->toggleTitle()->bool() ) : ?>
            <?php if( ! $page->titleAlternative()->isNotEmpty() ) : ?>
                <h1><?= $page->title()->html() ?></h1>
            <?php else: ?>
                <h1><?= $page->titleAlternative()->kirbytext() ?></h1>
            <?php endif; ?>
        <?php endif; ?>
        <?= $page->intro()->kirbytext() ?>

        <?php if( page('blog') || page('project') ): ?>
        <div class="meta-container">
            <p class="item-date">
                <?= $page->date('F j, Y') ?>
                <?php if( ( $page->date() == true ) && $page->tags()->isNotEmpty() ): ?>
                    &nbsp; <strong>&middot;</strong> &nbsp;
                <?php endif; ?>
                <?= $page->tags() ?>
            </p>
        </div>
        <?php endif; ?>

    </div>
</div>
