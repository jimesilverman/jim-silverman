<?php snippet('header') ?>

  <main class="main project" role="main">
    
    <header class="wrap">
      <div class="intro text">
        <h1><?= $page->title()->html() ?></h1>
        <?= $page->intro()->kirbytext() ?>
        <div class="meta-container">
          <p class="item-date"><?php echo $page->date('F d, Y') ?>&nbsp; <strong>·</strong> &nbsp; <?php echo $page->tags() ?></p></div>

      </div>
      
    </header>
    <div class="cover-image"> 
        <img src="<?= $page->image($page->coverimage())->url() ?>"/>
      </div>

    <div class="goals">
      <div class="wrap">
        <h2>Project Goals</h2>
        <?= $page->goals()->kirbytext() ?>
      </div>
    </div>
    <div class="start">
      <div class="wrap">
        <h2>Getting Started</h2>
        <?= $page->start()->kirbytext() ?>
      </div>
    </div>
    <div class="text wrap">
      
      <?= $page->text()->kirbytext() ?>

      <!--
      <?php
      // Images for the "project" template are sortable. You
      // can change the display by clicking the 'edit' button
      // above the files list in the sidebar.
      foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <figure>
          <img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>" />
        </figure>
      <?php endforeach ?>
      -->

    </div>
    <div class="results">
      <div class="wrap">
        <h2>The Results</h2>
        <?= $page->results()->kirbytext() ?>
      </div>
    </div>
    <div class="text wrap">
      <h2>What I Learned</h2>
      <?= $page->learned()->kirbytext() ?>
    </div>
        <div class="text wrap">

      <div class="prevnext">

      <?php snippet('prevnext') ?>

      </div>

    </div>    

  </main>

<?php snippet('footer') ?>