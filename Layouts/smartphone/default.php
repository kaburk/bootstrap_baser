<?php
/**
 * デフォルトレイアウト
 */
?>
<?php $this->BcBaser->docType('html5') ?>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=320, user-scalable=no">
<?php $this->BcBaser->title() ?>
<?php $this->BcBaser->metaDescription() ?>
<?php $this->BcBaser->metaKeywords() ?>
<?php $this->BcBaser->css('smartphone/import') ?>
<?php $this->BcBaser->js(array(
	'admin/jquery-1.7.2.min',
	'smartphone/startup'
)) ?>
<?php $this->BcBaser->scripts() ?>
<?php $this->BcBaser->element('google_analytics') ?>
</head>
<body id="<?php $this->BcBaser->contentsName() ?>">
<div id="Page">

	<header>
		<div class="clearfix" id="BoxLogo">
			<div id="Logo"><?php echo $this->BcBaser->siteConfig['name'] ?></div>
		</div>
		<?php if($this->BcBaser->isTop()): ?>
		<?php $this->BcBaser->img('smartphone/img_main.png', array('alt' => $this->BcBaser->siteConfig['name'])) ?>
		<?php endif ?>
		<?php $this->BcBaser->element('global_menu') ?>
	</header>

	<div id="ContentsBody" class="contents-body clearfix">
		<?php $this->BcBaser->flash() ?>
		<?php $this->BcBaser->content() ?>
		<?php $this->BcBaser->element('contents_navi') ?>
	</div>

	<div>
		<?php if(!empty($widgetArea)): ?>
		<?php $this->BcBaser->element('widget_area',array('no'=>$widgetArea)) ?>
		<?php endif ?>
	</div>

	<section id="ToTop">
	<a href="#Page">PAGE TOP</a>
	</section>

	<footer>
		<?php $this->BcBaser->element('global_menu') ?>
		<address>Copyright(C) 2008 - 2011 <br />baserCMS All rights Reserved.</address>
		<div class="banner">
		<?php $this->BcBaser->link($this->BcBaser->getImg('baser.power.gif', array('alt'=> 'baserCMS : Based Website Development Project', 'border'=> "0")),'http://basercms.net') ?>
		<?php $this->BcBaser->link($this->BcBaser->getImg('cake.power.gif', array('alt'=> 'CakePHP(tm) : Rapid Development Framework', 'border'=> "0")),'http://cakephp.jp') ?>
		</div>
	</footer>

</div>
<?php $this->BcBaser->func() ?>
</body>
</html>