<div id="slides">
	<div class="fotorama" data-allowfullscreen="native" data-maxheight="100%" data-maxwidth="100%">
		<?php 
			$images = array_diff(scandir(BASEPATH.'../assets/img/slides'), ['.', '..']);
            foreach ($images as $img) { ?>
                <a href="<?= toAbsolute('img/slides/'.$img) ?>"></a>
            <?php } 
        ?>
	</div>
</div>
