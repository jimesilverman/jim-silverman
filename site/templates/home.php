<?php
    snippet('header');
?>

<div class="intro home">
    <div class="wrap">
        <h1 id="hi-im-jim-silverman">Hi, I'm Jim Silverman.<br/>
            I make <span class="chaos">chaotic</span> interfaces simple.</h1>
        <hr class="t4">
        <p><a href="contact" class="btn">Get in touch</a> <em style="position: relative; top: -19px;"> or </em> <a href="projects" class="btn btn-icon-o al"><i class="fa fa-arrow-right"></i> Check out my work</a></p>    
    </div>
</div>

<div class="wrap">
    <hr/>
</div>

<div class="content-container home">


    <?php if( $page->text()->isNotEmpty() ) : ?>
    <hr />

    <div class="wrap-lg">
        <?= $page->text()->kirbytext() ?>
    </div>
    <?php endif; ?>

    
    
    <div class="wrap section-heading">
        <h2>Latest Projects</h2>
        <a href="<?= $site->url() ?>/projects" class="btn regular"><i class="fa fa-long-arrow-right"></i> All Projects</a>
    </div>
    <?php
        // -------------------------------------------------
        // Project Entries
        // -------------------------------------------------

        // Select what type of content you'd like to display
        $items = page('projects')->children()->visible()->sortBy('date', 'desc')->limit(3);

        // Select the listing view you'd like to use
        snippet('listing-new2',[ 'items' => $items ]);
    ?>

<div class="wrap-lg">
    <hr />
</div>

    <div class="wrap-lg">
        <div class="section-heading">
            <h2>Latest Articles</h2>
            <a href="<?= $site->url() ?>/articles" class="btn regular"><i class="fa fa-long-arrow-right"></i> All Articles</a>
        </div>
    </div>

    <?php
        // -------------------------------------------------
        // Blog Entries
        // -------------------------------------------------

        // Select what type of content you'd like to display
        $articles = page('articles')->children()->visible()->sortBy('date', 'desc')->limit(3);

        // Select the listing view you'd like to use
        snippet('listing-compact',[ 'items' => $articles ]);
    ?>
</div>

<div class="wrap-lg">
    <hr class="t2"/>
</div>

<?php snippet('footer') ?>
