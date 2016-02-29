<?php $images = get_field('home_slider'); ?>
<?php if( $images ): ?>
    <div id="slider" style="width:1920px; height:760px;">
            <?php $x = 0; ?>
            <?php foreach( $images as $image): $x++; ?>
                <div class="ls-layer">
                <img class="ls-bg" src="<?php echo $image['url']; ?>" alt="layer<?php echo $x; ?>-background">
                </div>
            <?php endforeach; ?>
        
    </div>
<?php endif; ?>