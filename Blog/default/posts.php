<?php
/**
 * [PUBLISH] 記事一覧
 *
 */
?>
<?php if($posts): ?>
<ul class="unstyled post-list">
	<?php foreach($posts as $key => $post): ?>
		<?php $class = array('post-'.($key+1)) ?>
		<?php if($this->BcArray->first($posts, $key)): ?>
			<?php $class[] = 'first' ?>
		<?php elseif($this->BcArray->last($posts, $key)): ?>
			<?php $class[] = 'last' ?>
		<?php endif ?>
	<li class="<?php echo implode(' ', $class) ?>">
		<i class="icon-time"></i><span class="date"><?php $this->Blog->postDate($post, 'Y.m.d') ?></span>
		<span class="title"><?php $this->Blog->postTitle($post) ?></span>
	</li>
	<?php endforeach ?>
</ul>
<?php else: ?>
<p class="no-data">記事がありません</p>
<?php endif ?>