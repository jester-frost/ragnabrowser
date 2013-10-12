<?php
header("Content-type: text/css; charset: UTF-8");
$hp =60;

?>

<?php if ( array_key_exists( 'tagstyle', $_GET ) ) : ?>
	<style type="text/css" rel="stylesheet"><?php endif; ?>
		



		.life .control{
			width:<? echo $hp;?>%;
			height:100%;
			background:#04f81b;
		}








		<?php if ( array_key_exists( 'tagstyle', $_GET ) ) : ?>
	</style><?php endif; ?>