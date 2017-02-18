<?php

/* Deny direct visit */
if(!defined('INDEX_RUN')) {
	header('HTTP/1.1 403 Forbidden');
	exit('This file must be loaded in flow.');
}

?>

<?php load_header(); ?>

<!-- Main section -->
<section id="mainh">
<!-- Change This Section -->
	<h1>协议</h1>
    <p class="hide_mobile"><?=COPYRIGHT ?></p>
	<h1>程序</h1>
	<p class="hide_mobile"><?=__('This site is powered by <a target="_blank" href="%s">Qchan %s</a>', QCHAN_URL, QCHAN_VER) ?></p>
	<h1>使用条款</h1>
	<a href="?page=agreement" target="_blank"><?=__('Agreement') ?></a>
	<h2>隐私政策</h2>
	<a href="?page=privacy" target="_blank"><?=__('Privacy') ?></a>
</section>

<?php load_footer(); ?>