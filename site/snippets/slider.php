<?php if ($page->slidersize() == 'small') : ?>
<div class="wrap">
<?php elseif($page->slidersize() == 'medium'): ?>
<div class="wrap-lg">
<?php endif; ?>

    <?php if( $page->covermedia() == 'cimage' ): ?>
        <?php if( $image = $page->images()->find($page->coverimage()) ): ?>
        <div class="cover-image">
            <img src="<?= thumb($image, array('width' => 1920, 'height' => 1000, 'crop' => true))->url() ?>" alt="" />
        </div>
        <?php endif; ?>
    <?php elseif( $page->covermedia() == 'cvideo' && $page->covervideo()->isNotEmpty() ): ?>
        <div class="cover-video">
            <video loop muted autoplay>
        	    <source src="<?= $page->file( $page->covervideo() )->url() ?>" type="video/mp4">
                <?php /*
                <source src="<?php echo $page->file( $page->covervideo() ) ?>" type="video/ogv">
        	    <source src="<?php echo $page->file( $page->covervideo() ) ?>" type="video/webm">
                */ ?>
    		</video>
        </div>
    <?php else: ?>
        <?php
            // Transform the comma-separated list of filenames into a file collection
            $filenames = $page->sliderimages()->split(',');
            if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');

            $files = call_user_func_array(array($page->files(), 'find'), $filenames);

            if(count($files) > 0) :
        ?>
        <div class="slider glide">
            <div class="glide__arrows">
                <button class="glide__arrow prev" data-glide-dir="<">◀</button>
                <button class="glide__arrow next" data-glide-dir=">">▶</button>
            </div>

            <div class="glide__wrapper">
                <ul class="glide__track">
                    <?php
                    	// Use the file collection
                        foreach($files as $file)
                    	{
                            echo '<li class="glide__slide"><img src="';
                    		echo $file->url();
                            echo '" alt="" /></li>';
                    	}
                    ?>
                </ul>
            </div>

            <div class="glide__bullets"></div>
        </div><!-- .slider -->
        <?php endif;?>
    <?php endif;?>


<?php if ($page->slidersize() == 'small' || $page->slidersize() == 'medium') : ?>
</div><!-- .wrap-->
<?php endif; ?>
