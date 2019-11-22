     

    <div class="cf"></div>

        <div class="footer" role="contentinfo">
            <div class="wrap">

                <div class="cta">
                    <?= $site->footer()->kirbytext() ?>

                    <?php snippet('social') ?>
                </div>

                <div class="cf"></div><br />

                <div class="colophon">
                    <?= $site->copyright()->kirbytext()?>
                </div>

                <div class="cf"></div>

            </div>
        </div>

    </div><!-- #container -->
</div><!-- #canvas -->

<div id="isMobile"></div>

<?= $site->googleanalytics()->html() ?>

<?= js('assets/scripts/scrolltofixed.min.js') ?>
<?= js('assets/scripts/main.js') ?>

<noscript>
    <style>
        .animsition-overlay-slide {
            display: none !important;
        }
    </style>
</noscript>
<?php echo js('assets/scripts/jquery.transit.min.js') ?>
<?php echo js('assets/scripts/site.js') ?>
</body>
</html>
