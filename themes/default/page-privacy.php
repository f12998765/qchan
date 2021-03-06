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
	<h1>隐私政策</h1>
	<p>本文中所说“本网站”为您当前使用的网站，“用户”是指使用本网站提供的服务的用户。</p>
	<h2>一、文件的公开性</h2>
	<p>本网站所提供的服务均为公开的，即使用户只在有限的范围内传播上传到本网站的文件，仍然完全防止第三方获取到保存在本网站中的文件。</p>
	<p>在用户上传文件到本网站前，请您充分注意隐私泄漏所造成的风险，不要将会造成严重后果的私密文件上传到本网站。</p>
	<h2>二、文件的安全性</h2>
	<p>尽管本网站已采用在成本限制内可用的方法来保证网站的安全，但仍然无法保证网站上的文件万无一失。黑客攻击、机房断电、人为的操作不当均可能会造成文件的损坏和丢失。</p>
	<p>另外，本网站禁止上传包含违法内容的图片，一经发现将由管理员永久删除。</p>
	<p>由此，在用户上传文件到本网站前，请充分注意文件损坏、丢失、被删除所造成的风险，对于重要的文件请进行备份。</p>
	<h2>三、用户信息的记录</h2>
	<p>本站既不记录上传文件的用户信息，亦不跟踪用户文件的使用情况。用户在本网站上所有操作均是匿名的。</p>
	<p>然而，出于分析服务使用情况的目的，网站的访问记录会记录如下信息：IP地址、User Agent String、访问时间、访问的来源和访问的地址。这些信息在用户访问其他网站时一样会由浏览器提交给其他网站，并不能作为用户的特征数据来确定用户的身份，对隐私特别担心的用户可以使用匿名代理。</p>
	<h2>四、隐私问题的报告</h2>
	<p>如果用户在使用本网站的过程中发现其他用户上传的文件对自己的隐私造成了侵犯，请联系网站的管理员报告。为了防止误删文件，请于报告中提供详细的证据，在管理员核实后将会对文件进行删除。</p>
</section>

<?php load_footer(); ?>