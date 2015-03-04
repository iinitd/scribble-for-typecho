<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <ul class="posts">

        <li>
            <small class="datetime muted" data-time="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?> </small>
            <a href="<?php $this->permalink() ?>">
                <?php $this->title() ?></a>
        </li>

    </ul>


    <?php endwhile; ?>
    <?php else: ?>
    <article class="post">
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
    <?php endif; ?>

    <?php $this->pageNav('上一页', '下一页'); ?>
</div>
<!-- end #main -->

<!-- <?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>