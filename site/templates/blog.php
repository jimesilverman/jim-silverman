<?php snippet('header') ?>
	<div class="blog-landing">
	<?php snippet('intro') ?>

	<div class="content-container">
	    <?php
	        $articles = page('articles')->children()->visible()->sortBy('date', 'desc')->paginate( (int)(string)$site->paginationBlog() );
	        $pagination = $articles->pagination();

	        // Select the listing view you'd like to use
	        snippet('listing-text',[ 'items' => $articles ]);
	    ?>
	    <div class="wrap">
	        <?php snippet('pagination', [ 'pagination' => $pagination ]); ?>
	    </div>
	</div>
</div>
<?php snippet('footer') ?>
