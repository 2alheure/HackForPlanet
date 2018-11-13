<?php
	function getImages($rep) {
		$repertory = BASEPATH.'../assets/img/slides';
		$files = array_diff(scandir($repertory), ['.', '..']);

		if (empty($files))
			return false;
		return $files;
	}
?>

<div>
	<div class="carousel" data-maxheight="80%" data-maxwidth="100%">
		<?php 
			$images = getImages($dossier);
            foreach ($images as $img) { ?>
                <a href="<?= toAbsolute('img/slides/'.$img) ?>"></a>
            <?php } 
        ?>
	</div>
</div>
