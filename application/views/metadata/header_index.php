<html lang="en-US">
	<head itemscope itemtype="http://schema.org/WebSite">
		<meta charset="UTF-8">
		<meta name="msapplication-TileImage" content="<?php echo base_url('wp-content/uploads/2020/02/theresearchprocess-logo.png');?>">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('wp-content/uploads/2020/02/theresearchprocess-logo.png');?>">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta itemprop="name" content="<?php echo $site_name; ?>" />
		<meta itemprop="url" content="<?php echo base_url();?>" />
		<title><?php echo $title;  ?></title>
		<meta name="description" content="<?php echo $description?>">
		<?php if($keywords!=null){?>	
		<meta name="keywords" content="<?php  echo $keywords; ?>">
		<?php }  ?>
		
		<?php if($index_status=="index"){echo '<meta name="robots" content="index, follow">';}else{echo '<meta name="robots" content="noindex, nofollow">';}?>

<?php
$get_cat_match="";
$filename="";
$total_sigment =$this->uri->total_segments();
$get_author_keyword=$this->uri->segment(1);
$get_news_title=$this->uri->segment(2);
 foreach($all_cat_pages as $row){
 if($get_author_keyword ==$row->cat_url){
 $get_cat_match=$row->cat_url;
 } }    
if(!empty($news_details)){ ?>
   <?php 
   //if(!empty($all_cat_pages)){
   //if($get_author_keyword !=$get_cat_match  && $get_author_keyword !='search' && $get_author_keyword !='editorial-policy' && $get_author_keyword !='about-us' && $get_author_keyword !='contact-us' && $get_author_keyword !='privacy-policy' &&  $get_author_keyword !='author'){
       
        
$no= substr($press['id'], -1);
switch ($no) {
	case 0:
        $img=1; break;
    case 1:
        $img=2; break;
    case 2:
        $img=3; break;
    case 3:
        $img=4; break;
    case 4:
        $img=5; break;
    case 5:
        $img=6; break;
    case 6:
        $img=7; break;
    case 7:
        $img=8; break;
    case 8:
        $img=9; break;
    case 9:
        $img=10; break;
    default:
        echo " ";
}
?>
    
<?php if(!empty($press['image_url'])){
    $filename=$press['image_url'];
}
if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$filename))
{
	$filename=base_url($filename);
}
else{
    //$k= 'news-'.$img.'.jpg';
	$filename=base_url('assets/imgs/news-'.$img.'.jpg');
}
?>
		<meta property="og:image" content="<?php echo $filename; ?>" />
		<meta property="og:image:width" content="800" />
		<meta property="og:image:height" content="800" />
		<link rel="amphtml" href="<?php echo current_url();?>/amp">
		<meta name="news_keywords" content="<?php echo $key_words; ?>" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $title;  ?>" />
		<meta property="og:description" content="<?php echo strip_tags(substr($description, 0, 280)); ?>" />
		<meta property="og:url" content="<?php echo current_url();?>/" />
		<meta property="og:site_name" content="<?php echo $site_name;?>" />
		<meta property="article:tag" content="<?php echo $press['url']; ?>" />
		<meta property="article:section" content="<?php echo $press['type']; ?>" />
		<meta property="article:published_time" content="<?php echo $press['date']; ?>" />
		<meta property="article:modified_time" content="<?php echo $press['date']; ?>" />
		<meta property="og:updated_time" content="<?php echo $press['date']; ?>" />
		<meta name="original-source" content="<?php echo current_url();?>/" />
		<meta name="twitter:image:src" content="<?php echo $filename;?>" />
<?php }//}} ?>


<?php if($get_author_keyword=="author" && empty($get_news_title) ){  ?> 
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $title;  ?>" />
		<meta property="og:description" content="<?php echo $description?>" />
		<meta property="og:url" content="<?php echo current_url(); ?>/" />
		<meta property="og:site_name" content="<?php echo $site_name; ?>" />
 <?php }
 if(!empty($all_cat_pages)){
 if(empty($get_author_keyword) || $get_author_keyword =='search' || $get_author_keyword =='about-us' || $get_author_keyword =='contact-us' || $get_author_keyword ==$get_cat_match || $get_author_keyword =='privacy-policy'  || $get_author_keyword =='editorial-policy'){ ?>
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo $title;  ?>" />
		<meta property="og:description" content="<?php echo $description?>" />
		<meta property="og:url" content="<?php echo current_url(); ?>/" />
		<meta property="og:site_name" content="<?php echo $site_name; ?>" />
 <?php }} ?>
  <?php if($total_sigment>1 && empty($news_details)){ ?>
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="object" />
		<meta property="og:title" content="<?php echo $title;  ?>" />
		<meta property="og:description" content="<?php echo strip_tags(substr($description, 0, 280)); ?>" />
		<meta property="og:url" content="<?php echo current_url();?>/" />
		<meta property="og:site_name" content="<?php echo $site_name; ?>" />
<?php } if($total_sigment==0){ ?>
<link rel="amphtml" href="<?php echo current_url();?>/amp">
<?php } ?>
		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/<?php echo $site_favicon; ?>">
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:url" content="<?php echo current_url();?>/" />
		<meta name="twitter:title" content="<?php echo $title;  ?>"/>
		<meta name="twitter:description" content="<?php echo $description?>" />
<?php
 if(!empty($all_cat_pages)){
if(($get_author_keyword==$get_cat_match) && $get_news_title!="") { ?>
		<meta name="twitter:image:src" content="<?php if(file_exists($filename)){echo base_url(); echo $filename;}else{echo base_url('assets/imgs');?>/<?php echo $k;}?>" />
<?php }else {?>
<?php }}  ?>

		<link rel="canonical" href="<?php echo current_url();?>/" />
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="dns-prefetch" href="//s.w.org">
		<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
		</style>
		<link rel="stylesheet" id="wp-block-library-css" href="<?php echo base_url('assets/css/style.min.css?ver=5.3.2');?>" type="text/css" media="all">
		<link rel="stylesheet" id="contact-form-7-css" href="<?php echo base_url('assets/css/styles.css?ver=5.1.6');?>" type="text/css" media="all">
		<link rel="stylesheet" id="herald-fonts-css" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C600%7CLato%3A400%2C700&amp;subset=latin%2Clatin-ext&amp;ver=1.5.1" type="text/css" media="all">
		<link rel="stylesheet" id="herald-main-css" href="<?php echo base_url('assets/css/min.css?ver=1.5.1');?>" type="text/css" media="all">
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160343100-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160343100-1');
</script>

		<style id="herald-main-inline-css" type="text/css">
		.herald-site-header .header-top,.header-top .herald-in-popup,.header-top .herald-menu ul{background: #0078af;color: #ffffff;}.header-top a{color: #ffffff;}.header-top a:hover,.header-top .herald-menu li:hover > a{color: #ffffff;}.header-top .herald-menu-popup:hover > span,.header-top .herald-menu-popup-search span:hover,.header-top .herald-menu-popup-search.herald-search-active{color: #ffffff;}#wp-calendar tbody td a{background: #0288d1;color:#FFF;}.header-middle{background-color: #ffffff;color: #000000;}.header-middle a{color: #000000;}.header-middle.herald-header-wraper,.header-middle .col-lg-12{height: 120px;}.header-middle .sub-menu{background-color: #000000;}.header-middle .sub-menu a,.header-middle .herald-search-submit:hover,.header-middle li.herald-mega-menu .col-lg-3 a:hover,.header-middle li.herald-mega-menu .col-lg-3 a:hover:after{color: #bcbcbc;}.header-middle .herald-menu li:hover > a,.header-middle .herald-menu-popup-search:hover > span{color: #bcbcbc;background-color: #000000;}.header-middle .current-menu-parent a,.header-middle .current-menu-ancestor a,.header-middle .current_page_item > a,.header-middle .current-menu-item > a{background-color: rgba(0,0,0,0.2); }.header-middle .sub-menu > li > a,.header-middle .herald-search-submit,.header-middle li.herald-mega-menu .col-lg-3 a{color: rgba(188,188,188,0.7); }.header-middle .sub-menu > li:hover > a{color: #bcbcbc; }.header-middle .herald-in-popup{background-color: #000000;}.header-middle .herald-menu-popup a{color: #bcbcbc;}.header-middle .herald-in-popup{background-color: #000000;}.header-middle .herald-search-input{color: #bcbcbc;}.header-middle .herald-menu-popup a{color: #bcbcbc;}.header-middle .herald-menu-popup > span,.header-middle .herald-search-active > span{color: #000000;}.header-middle .herald-menu-popup:hover > span,.header-middle .herald-search-active > span{background-color: #000000;color: #bcbcbc;}.header-bottom{background: #ffffff;color: #000000;}.header-bottom a,.header-bottom .herald-site-header .herald-search-submit{color: #000000;}.header-bottom a:hover{color: #9b9b9b;}.header-bottom a:hover,.header-bottom .herald-menu li:hover > a,.header-bottom li.herald-mega-menu .col-lg-3 a:hover:after{color: #9b9b9b;}.header-bottom .herald-menu li:hover > a,.header-bottom .herald-menu-popup-search:hover > span{color: #9b9b9b;background-color: #000000;}.header-bottom .current-menu-parent a,.header-bottom .current-menu-ancestor a,.header-bottom .current_page_item > a,.header-bottom .current-menu-item > a {background-color: rgba(0,0,0,0.2); }.header-bottom .sub-menu{background-color: #000000;}.header-bottom .herald-menu li.herald-mega-menu .col-lg-3 a,.header-bottom .sub-menu > li > a,.header-bottom .herald-search-submit{color: rgba(155,155,155,0.7); }.header-bottom .herald-menu li.herald-mega-menu .col-lg-3 a:hover,.header-bottom .sub-menu > li:hover > a{color: #9b9b9b; }.header-bottom .sub-menu > li > a,.header-bottom .herald-search-submit{color: rgba(155,155,155,0.7); }.header-bottom .sub-menu > li:hover > a{color: #9b9b9b; }.header-bottom .herald-in-popup{background-color: #000000;}.header-bottom .herald-menu-popup a{color: #9b9b9b;}.header-bottom .herald-in-popup,.header-bottom .herald-search-input{background-color: #000000;}.header-bottom .herald-menu-popup a,.header-bottom .herald-search-input{color: #9b9b9b;}.header-bottom .herald-menu-popup > span,.header-bottom .herald-search-active > span{color: #000000;}.header-bottom .herald-menu-popup:hover > span,.header-bottom .herald-search-active > span{background-color: #000000;color: #9b9b9b;}.herald-header-sticky{background: #ffffff;color: #000000;}.herald-header-sticky a{color: #000000;}.herald-header-sticky .herald-menu li:hover > a{color: #848484;background-color: #000000;}.herald-header-sticky .sub-menu{background-color: #000000;}.herald-header-sticky .sub-menu a{color: #848484;}.herald-header-sticky .sub-menu > li:hover > a{color: #ffffff;}.herald-header-sticky .herald-in-popup,.herald-header-sticky .herald-search-input{background-color: #000000;}.herald-header-sticky .herald-menu-popup a{color: #848484;}.herald-header-sticky .herald-menu-popup > span,.herald-header-sticky .herald-search-active > span{color: #000000;}.herald-header-sticky .herald-menu-popup:hover > span,.herald-header-sticky .herald-search-active > span{background-color: #000000;color: #848484;}.herald-header-sticky .herald-search-input,.herald-header-sticky .herald-search-submit{color: #848484;}.herald-header-sticky .herald-menu li:hover > a,.herald-header-sticky .herald-menu-popup-search:hover > span{color: #848484;background-color: #000000;}.header-trending{background: #eeeeee;color: #666666;}.header-trending a{color: #666666;}.header-trending a:hover{color: #111111;}.header-bottom{ border-top: 1px solid rgba(0,0,0,0.15);}.herald-site-content { margin-top: 1px; }body {background-color:#eeeeee;color: #444444;font-family: 'Open Sans';font-weight: 400;}.herald-site-content{background-color:#ffffff; box-shadow: 0 0 0 1px rgba(68,68,68,0.1);}h1, h2, h3, h4, h5, h6,.h1, .h2, .h3, .h4, .h5, .h6, .h7{font-family: 'Lato';font-weight: 700;}.header-middle .herald-menu,.header-bottom .herald-menu,.herald-header-sticky .herald-menu,.herald-mobile-nav{font-family: 'Open Sans';font-weight: 600;}.herald-menu li.herald-mega-menu .herald-ovrld .meta-category a{font-family: 'Open Sans';font-weight: 400;}.herald-entry-content blockquote p{color: #0288d1;}pre {background: rgba(68,68,68,0.06);border: 1px solid rgba(68,68,68,0.2);}thead {background: rgba(68,68,68,0.06);}a,.entry-title a:hover,.herald-menu .sub-menu li .meta-category a{color: #0288d1;}.entry-meta-wrapper .entry-meta span:before,.entry-meta-wrapper .entry-meta a:before,.entry-meta-wrapper .entry-meta .meta-item:before,.entry-meta-wrapper .entry-meta div,li.herald-mega-menu .sub-menu .entry-title a,.entry-meta-wrapper .herald-author-twitter{color: #444444;}.herald-mod-title h1,.herald-mod-title h2,.herald-mod-title h4{color: #ffffff;}.herald-mod-head:after,.herald-mod-title .herald-color,.widget-title:after,.widget-title span{color: #ffffff;background-color: #333333;}.herald-ovrld .meta-category a,.herald-fa-wrapper .meta-category a{background-color: #0288d1;}.meta-tags a,.widget_tag_cloud a,.herald-share-meta:after{background: rgba(51,51,51,0.1);}h1, h2, h3, h4, h5, h6,.entry-title a {color: #333333;}.herald-pagination .page-numbers,.herald-mod-subnav a,.herald-mod-actions a,.herald-slider-controls div,.meta-tags a,.widget.widget_tag_cloud a,.herald-sidebar .mks_autor_link_wrap a,.mks_themeforest_widget .mks_read_more a,.herald-read-more{color: #444444;}.widget.widget_tag_cloud a:hover,.entry-content .meta-tags a:hover{background-color: #0288d1;color: #FFF;}.herald-pagination .prev.page-numbers,.herald-pagination .next.page-numbers,.herald-pagination .prev.page-numbers:hover,.herald-pagination .next.page-numbers:hover,.herald-pagination .page-numbers.current,.herald-pagination .page-numbers.current:hover,.herald-next a,.herald-pagination .herald-next a:hover,.herald-prev a,.herald-pagination .herald-prev a:hover,.herald-load-more a,.herald-load-more a:hover,.entry-content .herald-search-submit,.herald-mod-desc .herald-search-submit,.wpcf7-submit{background-color:#0288d1;color: #FFF;}.herald-pagination .page-numbers:hover{background-color: rgba(68,68,68,0.1);}.widget a,.recentcomments a,.widget a:hover,.herald-sticky-next a:hover,.herald-sticky-prev a:hover,.herald-mod-subnav a:hover,.herald-mod-actions a:hover,.herald-slider-controls div:hover,.meta-tags a:hover,.widget_tag_cloud a:hover,.mks_autor_link_wrap a:hover,.mks_themeforest_widget .mks_read_more a:hover,.herald-read-more:hover,.widget .entry-title a:hover,li.herald-mega-menu .sub-menu .entry-title a:hover,.entry-meta-wrapper .meta-item:hover a,.entry-meta-wrapper .meta-item:hover a:before,.entry-meta-wrapper .herald-share:hover > span,.entry-meta-wrapper .herald-author-name:hover,.entry-meta-wrapper .herald-author-twitter:hover,.entry-meta-wrapper .herald-author-twitter:hover:before{color:#0288d1;}.widget ul li a,.widget .entry-title a,.herald-author-name,.entry-meta-wrapper .meta-item,.entry-meta-wrapper .meta-item span,.entry-meta-wrapper .meta-item a,.herald-mod-actions a{color: #444444;}.widget li:before{background: rgba(68,68,68,0.3);}.widget_categories .count{background: #0288d1;color: #FFF;}input[type="submit"],.spinner > div{background-color: #0288d1;}.herald-mod-actions a:hover,.comment-body .edit-link a,.herald-breadcrumbs a:hover{color:#0288d1;}.herald-header-wraper .herald-soc-nav a:hover,.meta-tags span,li.herald-mega-menu .herald-ovrld .entry-title a,li.herald-mega-menu .herald-ovrld .entry-title a:hover,.herald-ovrld .entry-meta .herald-reviews i:before{color: #FFF;}.entry-meta .meta-item, .entry-meta span, .entry-meta a,.meta-category span,.post-date,.recentcomments,.rss-date,.comment-metadata a,.entry-meta a:hover,.herald-menu li.herald-mega-menu .col-lg-3 a:after,.herald-breadcrumbs,.herald-breadcrumbs a,.entry-meta .herald-reviews i:before{color: #999999;}.herald-lay-a .herald-lay-over{background: #ffffff;}.herald-pagination a:hover,input[type="submit"]:hover,.entry-content .herald-search-submit:hover,.wpcf7-submit:hover,.herald-fa-wrapper .meta-category a:hover,.herald-ovrld .meta-category a:hover,.herald-mod-desc .herald-search-submit:hover,.herald-single-sticky .herald-share li a:hover{cursor: pointer;text-decoration: none;background-image: -moz-linear-gradient(left,rgba(0,0,0,0.1) 0%,rgba(0,0,0,0.1) 100%);background-image: -webkit-gradient(linear,left top,right top,color-stop(0%,rgba(0,0,0,0.1)),color-stop(100%,rgba(0,0,0,0.1)));background-image: -webkit-linear-gradient(left,rgba(0,0,0,0.1) 0%,rgba(0,0,0,0.1) 100%);background-image: -o-linear-gradient(left,rgba(0,0,0,0.1) 0%,rgba(0,0,0,0.1) 100%);background-image: -ms-linear-gradient(left,rgba(0,0,0,0.1) 0%,rgba(0,0,0,0.1) 100%);background-image: linear-gradient(to right,rgba(0,0,0,0.1) 0%,rgba(0,0,0,0.1) 100%);}.herald-sticky-next a,.herald-sticky-prev a{color: #444444;}.herald-sticky-prev a:before,.herald-sticky-next a:before,.herald-comment-action,.meta-tags span,.herald-entry-content .herald-link-pages a{background: #444444;}.herald-sticky-prev a:hover:before,.herald-sticky-next a:hover:before,.herald-comment-action:hover,div.mejs-controls .mejs-time-rail .mejs-time-current,.herald-entry-content .herald-link-pages a:hover{background: #0288d1;} .herald-site-footer{background: #000000;color: #dddddd;}.herald-site-footer .widget-title span{color: #dddddd;background: transparent;}.herald-site-footer .widget-title:before{background:#dddddd;}.herald-site-footer .widget-title:after,.herald-site-footer .widget_tag_cloud a{background: rgba(221,221,221,0.1);}.herald-site-footer .widget li:before{background: rgba(221,221,221,0.3);}.herald-site-footer a,.herald-site-footer .widget a:hover,.herald-site-footer .widget .meta-category a,.herald-site-footer .herald-slider-controls .owl-prev:hover,.herald-site-footer .herald-slider-controls .owl-next:hover,.herald-site-footer .herald-slider-controls .herald-mod-actions:hover{color: #0288d1;}.herald-site-footer .widget a,.herald-site-footer .mks_author_widget h3{color: #dddddd;}.herald-site-footer .entry-meta .meta-item, .herald-site-footer .entry-meta span, .herald-site-footer .entry-meta a, .herald-site-footer .meta-category span, .herald-site-footer .post-date, .herald-site-footer .recentcomments, .herald-site-footer .rss-date, .herald-site-footer .comment-metadata a{color: #aaaaaa;}.herald-site-footer .mks_author_widget .mks_autor_link_wrap a, .herald-site-footer.mks_read_more a, .herald-site-footer .herald-read-more,.herald-site-footer .herald-slider-controls .owl-prev, .herald-site-footer .herald-slider-controls .owl-next, .herald-site-footer .herald-mod-wrap .herald-mod-actions a{border-color: rgba(221,221,221,0.2);}.herald-site-footer .mks_author_widget .mks_autor_link_wrap a:hover, .herald-site-footer.mks_read_more a:hover, .herald-site-footer .herald-read-more:hover,.herald-site-footer .herald-slider-controls .owl-prev:hover, .herald-site-footer .herald-slider-controls .owl-next:hover, .herald-site-footer .herald-mod-wrap .herald-mod-actions a:hover{border-color: rgba(2,136,209,0.5);}.herald-site-footer .widget_search .herald-search-input{color: #222222;}.herald-site-footer .widget_tag_cloud a:hover{background:#0288d1;color:#FFF;}.footer-bottom a{color:#dddddd;}.footer-bottom a:hover,.footer-bottom .herald-copyright a{color:#0288d1;}.footer-bottom .herald-menu li:hover > a{color: #0288d1;}.footer-bottom .sub-menu{background-color: rgba(0,0,0,0.5);} .herald-pagination{border-top: 1px solid rgba(51,51,51,0.1);}.entry-content a:hover,.comment-respond a:hover,.comment-reply-link:hover{border-bottom: 2px solid #0288d1;}.footer-bottom .herald-copyright a:hover{border-bottom: 2px solid #0288d1;}.herald-slider-controls .owl-prev,.herald-slider-controls .owl-next,.herald-mod-wrap .herald-mod-actions a{border: 1px solid rgba(68,68,68,0.2);}.herald-slider-controls .owl-prev:hover,.herald-slider-controls .owl-next:hover,.herald-mod-wrap .herald-mod-actions a:hover{border-color: rgba(2,136,209,0.5);}.herald-pagination,.herald-link-pages,#wp-calendar thead th,#wp-calendar tbody td,#wp-calendar tbody td:last-child{border-color: rgba(68,68,68,0.1);}.herald-lay-h:after,.herald-site-content .herald-related .herald-lay-h:after,.herald-lay-e:after,.herald-site-content .herald-related .herald-lay-e:after,.herald-lay-j:after,.herald-site-content .herald-related .herald-lay-j:after,.herald-lay-l:after,.herald-site-content .herald-related .herald-lay-l:after {background-color: rgba(68,68,68,0.1);}input[type="text"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="date"], input[type="password"], select, textarea,.herald-single-sticky,td,th,table,.mks_author_widget .mks_autor_link_wrap a,.mks_read_more a,.herald-read-more{border-color: rgba(68,68,68,0.2);}.entry-content .herald-search-input,.herald-fake-button,input[type="text"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="date"]:focus, input[type="password"]:focus, textarea:focus{border-color: rgba(68,68,68,0.3);}.mks_author_widget .mks_autor_link_wrap a:hover,.mks_read_more a:hover,.herald-read-more:hover{border-color: rgba(2,136,209,0.5);}.comment-form,.herald-gray-area,.entry-content .herald-search-form,.herald-mod-desc .herald-search-form{background-color: rgba(68,68,68,0.06);border: 1px solid rgba(68,68,68,0.15);}.herald-boxed .herald-breadcrumbs{background-color: rgba(68,68,68,0.06);}.herald-breadcrumbs{border-color: rgba(68,68,68,0.15);}.single .herald-entry-content .herald-ad,.archive .herald-posts .herald-ad{border-top: 1px solid rgba(68,68,68,0.15);}.archive .herald-posts .herald-ad{border-bottom: 1px solid rgba(68,68,68,0.15);}li.comment .comment-body:after{background-color: rgba(68,68,68,0.06);}.herald-pf-invert .entry-title a:hover .herald-format-icon{background: #0288d1;}.herald-responsive-header{ box-shadow: 1px 0 0 1px rgba(0,0,0,0.15);}.herald-responsive-header,.herald-mobile-nav,.herald-responsive-header .herald-menu-popup-search .fa{color: #000000;background: #ffffff;}.herald-responsive-header a{color: #000000;}.herald-mobile-nav li a{color: #000000;}.herald-mobile-nav li a,.herald-mobile-nav .herald-mega-menu.herald-mega-menu-classic>.sub-menu>li>a{border-bottom: 1px solid rgba(0,0,0,0.15);}.herald-mobile-nav{border-right: 1px solid rgba(0,0,0,0.15);}.herald-mobile-nav li a:hover{color: #fff;background-color: #9b9b9b;}.herald-menu-toggler{color: #000000;border-color: rgba(0,0,0,0.15);}.herald-goto-top{color: #ffffff;background-color: #333333;}.herald-goto-top:hover{background-color: #0288d1;}.herald-responsive-header .herald-menu-popup > span,.herald-responsive-header .herald-search-active > span{color: #000000;}.herald-responsive-header .herald-menu-popup-search .herald-in-popup{background: #ffffff;}.herald-responsive-header .herald-search-input,.herald-responsive-header .herald-menu-popup-search .herald-search-submit{color: #444444;}.site-title a{text-transform: none;}.site-description{text-transform: none;}.main-navigation{text-transform: uppercase;}.entry-title{text-transform: none;}.meta-category a{text-transform: uppercase;}.herald-mod-title{text-transform: none;}.herald-sidebar .widget-title{text-transform: none;}.herald-site-footer .widget-title{text-transform: none;}.fa-post-thumbnail:before, .herald-ovrld .herald-post-thumbnail span:before, .herald-ovrld .herald-post-thumbnail a:before { opacity: 0.5; }.herald-fa-item:hover .fa-post-thumbnail:before, .herald-ovrld:hover .herald-post-thumbnail a:before, .herald-ovrld:hover .herald-post-thumbnail span:before{ opacity: 0.8; }@media only screen and (min-width: 1249px) {.herald-site-header .header-top,.header-middle,.header-bottom,.herald-header-sticky,.header-trending{ display:block !important;}.herald-responsive-header,.herald-mobile-nav{display:none !important;}.herald-site-content {margin-top: 0 !important;}.herald-mega-menu .sub-menu {display: block;}}
		</style>
		<link rel="stylesheet" id="tmm-css" href="<?php echo base_url('assets/css/tmm_style.min.css?ver=5.3.2');?>" type="text/css" media="all">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js?ver=1.12.4-wp');?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-migrate.min.js?ver=1.4.1');?>"></script>
		<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
	</head>

<body class="home blog paged paged-2 chrome herald-boxed" data-gr-c-s-loaded="true">
	<header id="header" class="herald-site-header">
		<div class="header-top hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="hel-l">
							<nav class="secondary-navigation herald-menu">	
								<ul id="menu-pages" class="menu">
									<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57">
									<!-- 	<a href="<?php echo base_url('editorial-policy');echo '/'; ?>">Editorial Policy</a> -->
									</li>
									<li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58">
										<!-- <a href="<?php echo base_url('privacy-policy');echo '/'; ?>">Privacy Policy</a> -->
									</li>
								</ul>
							</nav>
						</div>
						<div class="hel-r">
							<span class="herald-calendar">
								<i class="fa fa-calendar"></i><?php echo date("F d, Y");?>
							</span>									
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="header-middle header-bottom herald-header-wraper hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 hel-el">
						<div class="hel-l herald-go-hor" style="position: absolute; opacity: 1;">
							<div class="site-branding">
								<h1 class="site-title h1">
									<a href="<?php echo base_url('');?>" rel="home"><img class="herald-logo" src="<?php echo base_url('assets/images/theresearchprocess-logo.png');?>" alt="theresearchprocess.com" style=" max-height: 100px !important;margin-top: 42px;

"></a>
								</h1>
							</div>
						</div>		
						<div class="hel-r herald-go-hor" style="position: absolute; top: 31px; opacity: 1;"></div>
					</div>

					<div class="col-lg-8 hel-el">
						<div class="hel-l" style="position: absolute; opacity: 1;">
							<nav class="main-navigation herald-menu">	
								<ul id="menu-categories" class="menu">
									<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
										{ ?>
											<li>
												<a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a>
											</li>       
									<?php }} ?>
								</ul>
							</nav>													
										
						</div>
						<div class="hel-r herald-go-hor" style="position: absolute; top: 28px; opacity: 1;"></div>
					</div>


				</div>
			</div>
		</div>							
								
		<div class="header-trending hidden-xs hidden-sm">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">		
						<div class="row">
							<?php foreach($oldnews as $row2){
								$no= substr($row2->id, -1);
								switch ($no) {
									case 0:
										$img=1; break;
									case 1:
										$img=2; break;
									case 2:
										$img=3; break;
									case 3:
										$img=4; break;
									case 4:
										$img=5; break;
									case 5:
										$img=6; break;
									case 6:
										$img=7; break;
									case 7:
										$img=8; break;
									case 8:
										$img=9; break;
									case 9:
										$img=10; break;
									default:
										echo " ";
								}
								if(!empty($row2->image_url))
								{
									$filename=$row2->image_url;
								}
								if(file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$filename))
								{
									$filename=base_url($filename);
								}
								else{
									$filename=base_url('assets/imgs/news-'.$img.'.jpg');
								}
								?>
								<div class="col-lg-2 col-md-2">
									<div class="herald-post-thumbnail">
										<a href="<?php echo base_url('');echo $row2->url;echo '/';?>" title="<?php echo str_replace("&","&amp;",$row2->name); ?>">
										
										<img src="<?php echo $filename;?>" alt="<?php echo str_replace("&","&amp;",$row2->name); ?>"></a>
									</div>
									<h4 class="h6">
										<a href="<?php echo base_url('');echo $row2->url;echo '/';?>" title="<?php echo str_replace("&","&amp;",$row2->name); ?>" rel="bookmark"><?php echo str_replace("&","&amp;",$row2->name); ?></a>
									</h4>
								</div>
							<?php } ?>	  	
						</div>	
					</div>		
				</div>
			</div>
		</div>				
	</header>

	<div id="sticky-header" class="herald-header-sticky herald-header-wraper herald-slide hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 hel-el">
					<div class="hel-l herald-go-hor" style="position: absolute; top: 0px; opacity: 1;">
						<div class="site-branding mini">
							<span class="site-title h1">
								<a href="<?php echo base_url('');?>" rel="home"><img class="herald-logo" src="<?php echo base_url('assets/images/theresearchprocess-logo.png');?>" alt="theresearchprocess.com"></a>
							</span>
						</div>
					</div>
					<div class="hel-r herald-go-hor" style="position: absolute; top: 0px; opacity: 1;">
						<nav class="main-navigation herald-menu">	
							<ul id="menu-categories-1" class="menu">
								<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
									{ ?>
										<li>
											<a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a>
										</li>       
								<?php }} ?>    
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<div id="herald-responsive-header" class="herald-responsive-header herald-slide hidden-lg hidden-md">
		<div class="container">
			<div class="herald-nav-toggle">
				<i class="fa fa-bars"></i>
			</div>
			<div class="site-branding mini">
				<span class="site-title h1">
					<a href="<?php echo base_url();?>" rel="home"><img class="herald-logo-mini" src="<?php echo base_url('wp-content/uploads/2020/02/theresearchprocess-logo.png');?>" alt="<?php echo $site_name;?>"></a>
				</span>
			</div>
			<div class="herald-menu-popup-search">
				<span class="fa fa-search"></span>
				<div class="herald-in-popup">
					<form id="searchform"  class="herald-search-form" action="<?php echo base_url(); ?>search" method="get">
						<input name="q" id="s" class="herald-search-input" type="text" value="" placeholder="Type here to search...">
						<button type="submit" class="herald-search-submit"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="herald-mobile-nav herald-slide hidden-lg hidden-md">
		<ul id="menu-categories-2" class="herald-mob-nav">
			<?php if(!empty($all_cat_pages)){ foreach($all_cat_pages as $row)
				{ ?>
					<li><a href="<?php echo base_url('category/'.$row->cat_url);echo '/';?>"><?php echo $row->cat_name; ?></a></li>       
			<?php }} ?>
		</ul>
	</div>
	<script type="text/javascript" src="<?php echo base_url('assets/js/scripts.js?ver=5.1.6');?>"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
	var herald_js_settings = {"ajax_url":"https:\/\/www.theresearchprocess.com","rtl_mode":"false","header_sticky":"1","header_sticky_offset":"600","header_sticky_up":"","single_sticky_bar":"","popup_img":"1","logo":"https:\/\/www.theresearchprocess.com\/wp-content\/uploads\/2020\/02\/theresearchprocess-logo.png","logo_retina":"https:\/\/www.theresearchprocess.com\/wp-content\/uploads\/2020\/02\/theresearchprocess-logo.png","logo_mini":"https:\/\/www.theresearchprocess.com\/wp-content\/uploads\/2020\/02\/theresearchprocess-logo.png","logo_mini_retina":"https:\/\/www.theresearchprocess.com\/wp-content\/uploads\/2020\/02\/theresearchprocess-logo.png","smooth_scroll":""};
	/* ]]> */
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/min.js?ver=1.5.1');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/wp-embed.min.js?ver=5.3.2');?>"></script>
</body>
</html>