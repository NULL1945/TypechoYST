<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <script type=text/javascript src="<?php $this->options->themeUrl('MyJS.js'); ?>"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    
    <!--[if lt IE 9]>
    	<script>window.location.href='http://www.hello1995.com/ie6_must_die.html';</script>
    <![endif]-->

</head>

<body>

<header id="nav" class="nav">
    <div class="nav-warp">
        <h1 class="nav-logo"><a href="<?php $this->options->siteUrl(); ?>" alt="<?php $this->options->title() ?>"><?php $this->options->title() ?></a></h1>
        <nav class="nav-menu clear">
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                  <?php while($pages->next()): ?>
                  <?php if($this->is('page',$pages->slug)): ?><?php endif; ?>
                  <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
        </nav>
    </div>
</header>

<main>
<br /><br />

<div id="body">
    <div class="container">
        <div class="row">

    
    
