<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>サンプルエステ検索サイト</title>
<meta name="description" content="">
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>

<h1 class="big_h2">404 Not Found</h1>

<h2 class="sub_page">お探しのページが<br>
見つかりませんでした</h2>

<div class="in_box">
<a href="/" class="top-button">オイルマフィアトップページ <i class="fa-solid fa-square-up-right"></i></a>
</div>


    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
</div>
<?php include $inc_path .'/inc/footer.php';?>
