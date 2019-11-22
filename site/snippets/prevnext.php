
<?php if($page->hasPrevVisible() ): ?>
    <strong>Next</strong> <br />
    <a href="<?= $page->prevVisible()->url(); ?>" class="h1 al"><?= $page->prevVisible()->title(); ?></a> &rarr;
<?php else: ?>
    <strong>The End.</strong> <br />
    <a href="<?= $site->url(); ?>" class="h1 al">Start over</a> &rarr;
<?php endif; ?>
