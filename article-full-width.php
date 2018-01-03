<?php include(dirname(__FILE__) . '/header.php'); ?>

<section>

	<div class="content">

		<div class="full-width">

			<article role="article" id="post-<?php echo $plxShow->artId(); ?>">

				<header>
					<h1>
						<?php $plxShow->artTitle(''); ?>
					</h1>
					<p>
						<?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> -
						<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> -
						<?php $plxShow->artNbCom(); ?>
					</p>
				</header>

				<section>
					<?php $plxShow->artContent(); ?>
				</section>

				<footer>
					<p>
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> -
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
					</p>
				</footer>

			</article>

			<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

		</div>

	</div>

</section>

<?php include(dirname(__FILE__) . '/footer.php'); ?>



<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" class="ie ie9"> <!--<![endif]-->
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>

    <!-- Mobile Specific Metas
    +++++++++++++++++++++++++++ -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=Edge"><![endif]-->
    <link rel="shortcut icon" href="img/favico.ico">

    <link rel="apple-touch-icon" href="img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple_icons_114x114.png">

    <title>Dixit - Blog Post</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">    
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/theme_settings.css">
	<link rel="stylesheet" type="text/css" href="css/color_theme.css" id="theme_color">
        
    <!--[if IE 8 ]><script>
        var e = ("article,aside,figcaption,figure,footer,header,hgroup,nav,section,time").split(',');
        for (var i = 0; i < e.length; i++) {
            document.createElement(e[i]);
        }		
    </script><![endif]-->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	
</head>

<body>
<header>
    	<div class="top_line">
        	<div class="container">
                <div class="call_us"><span class="ico">p</span>Call us toll free:&nbsp; +1 800 546 35 48</div>
                <div class="socials">
                    <ul class="socials_list">
                        <li><a href="#" class="ico_social-facebook"></a></li>
                        <li><a href="#" class="ico_social-twitter"></a></li>
                        <li><a href="#" class="ico_social-youtube"></a></li>
                        <li><a href="#" class="ico_social-gplus"></a></li>
                        <li><a href="#" class="ico_social-dribbble"></a></li>
                        <li><a href="#" class="ico_social-delicious"></a></li>
                        <li><a href="#" class="ico_social-tumblr"></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div><!-- .top_line -->
        <div class="header_wrapper container">
        	<a href="index.html" class="logo"><img src="img/logo.png" alt=""  width="115" height="30" class="logo_def"><img src="img/retina/logo.png" alt="" width="115" height="30" class="logo_retina"></a>
            <nav>
                <ul class="menu">
                    <li><a href="javascript:void(0)">HOME</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Clean Style With Fullwidth Slider</a></li>
                            <li><a href="home2.html">Clean Style</a></li>
                            <li><a href="home3.html">Background Color With Fullwidth Slider</a></li>
                            <li><a href="home4.html">Background Color</a></li>
                            <li><a href="home5.html">Background Image</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">PAGES</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About</a></li>
                            <li><a href="full-width.html">Full Width</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                        </ul>                        
                    </li>
                    <li><a href="javascript:void(0)">FEATURES</a>
                        <ul class="sub-menu">
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">PORTFOLIO</a>
                        <ul class="sub-menu">
                            <li><a href="portfolio1.html">1 Column</a></li>
                            <li><a href="portfolio2.html">2 Columns</a></li>
                            <li><a href="portfolio3.html">3 Columns</a></li>
                            <li><a href="portfolio4.html">4 Columns</a></li>                                
                            <li><a href="portfolio_post.html">Portfolio Post</a></li>
                        </ul>
                    </li>
                    <li class="current-menu-parent"><a href="javascript:void(0)">BLOG</a>
                        <ul class="sub-menu">
                            <li><a href="blog_full.html">Full Width</a></li>
                            <li class="current-menu-item"><a href="blogpost_full.html">Blog Post</a></li>
                            <li><a href="javascript:void(0)">With Sidebar</a>
                                <ul class="sub-menu">
                                    <li><a href="blog_left.html">Left Sidebar</a></li>
                                    <li><a href="blog_right.html">Right Sidebar</a></li>
                                    <li><a href="blogpost_sidebar.html">Blog Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">SHOP</a>
                        <ul class="sub-menu">
                            <li><a href="shop_products.html">All Products</a></li>
                            <li><a href="shop_item.html">Shop Item</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">CONTACTS</a>
                        <ul class="sub-menu">
                            <li><a href="contact_full.html">Full Width</a></li>
                            <li><a href="contact_sidebar.html">With Sidebar</a></li>
                        </ul>
                    </li>
                </ul><!-- .menu -->
                <div class="clear"></div>
            </nav>
            <div class="head_search">
                <form class="search_form" method="get" name="search_form">
                    <input type="text" class="field_search" title="Search..." value="Search..." name="s">
                </form>
            </div>            
        </div>
    </header>
    
    <div class="main_wrapper">
        <!-- C O N T E N T -->
        <div class="content_wrapper">
        	<div class="page_title_block">
            	<div class="container">
                    <h1 class="title">Blog Post</h1>
                    <div class="breadcrumbs"><a href="home.html">Home</a><a href="#">Blog</a><span>Blog Post</span></div>
                </div>
            </div>        
            <div class="container">
                <div class="content_block no-sidebar row">
                    <div class="fl-container span12">
                        <div class="row">
                            <div class="posts-block span12">
                                <div class="contentarea">
                                    
                                    <div class="row-fluid">                                
                                        <div class="span12 module_cont module_blog">
                                        
                                            <div class="blog_post_page">
	                                            <div class="bg_title"><h4><a class="blogpost_title" href="blogpost_full.html">Lorem Ipsum Dolor</a></h4></div>
                                                <div class="blogpost_info_wrapper">                                                                                                        
                                                    <div class="blog_info_block">
                                                        <div class="blog_author"><a href="#">Tom Sawyer</a></div>
                                                        <div class="blog_date">25 apr 2019</div>
                                                        <div class="blog_categ"><a href="#">Accounting</a>, <a href="#">Promotion</a></div>
                                                        <div class="blog_comments"><a href="#">4 comments</a></div>
                                                        <div class="blog_tags"><a href="#">lorem</a>, <a href="#">ipsum</a>, <a href="#">dolor</a></div>
                                                        <span class="clear"></span>
                                                    </div>
                                                </div>
                                                <div class="featured_image_full">
													<img src="img/pictures/blogpost-slide3f.jpg" alt="" />
                                                </div><!-- .featured_image_full -->
                                                <article class="contentarea">
                                                    <p>Vestibulum eget consequat viverra ipsum, sed placerat ligula aliquam eu. Nam sapien eros enatis at dapibus facilisis, lacinia sagittis purus. Ut euismod aliquet enim, nec semper mi posuere nec lors nam nunc est, faucibus iaculis varius vitae, placerat quis felis. Nunc elementum dolor quis aclorem arcuege. tristique viverra. Morbi nec suscipit lacust rhoncus in aliquet ornare vivamus.</p>
                                                    <p>Nulla sagittis lacinia libero, quis lacinia orci imperdiet vel. Aliquam eget velit eu metus auctor facilisis ac a purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis sit amet <a href="#"><em>interdum neque.</em></a> Vestibulum nulla lorem, varius in sollicitudin elementum, ultrices sit amet arcu. Donec molestie vehicula eleifend. Nunc viverra elementum convallis. Pellentesque consequat tempus purus et placerat. Donec ut magna in eros congue cursus. Mauris dignissim facilisis augue nec vestibulum. Nullam a metus mauris. Vivamus ut purus enim. Sed pulvinar odio consequat turpis sagittis non tempus erat aliquam. Suspendisse potenti. Suspendisse massa orci, bibendum vel suscipit ornare, posuere vel lorem. Aenean posuere, est sed ultricies imperdiet, turpis dui volutpat metus, ac accumsan justo eros eget augue. Integer id orci augue, ac scelerisque est. Mauris condimentum aliquam felis, sed porttitor arcu molestie quis. Morbi elit diam, tempus ac vestibulum quis, accumsan aloret turpis. Maecenas ac ornare sapien. Aliquam ultrices justo et diam tincidunt elementum. Quisque a porta erat. Sed eleifend tortor ut magna sodales pharetra.</p>
                                                    <p>Donec dictum faucibus orci eget dapibus. Ut malesuada bibendum blandit. In eu lectus non ligula viverra blandit. Maecenas sodales pulvinar nisi, at aliquet augue tincidunt vel. Donec commodo ullamcorper felis, vitae elementum nibh fringilla eget. Aenean placerat massa a nisi gravida mattis. Sed vel eros vel odio vestibulum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare interdum augue at sodales. Sed sapien lectus, tempus et consequat egestas, imperdiet ut felis. Mauris lacinia rhoncus elit.</p>
                                                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla stibulum justo sit amet pulvinar convallisist massa turpis egets sed facilisis magna eros, id dictum arcu. Curabitur suscipit hendrerit egets porttitor. Aliquam nusl ultricien ullamcorper erat eget tempor eget mauris vulputate diam quis. augue tincidunt rhoncus in aliquet ornare malesuada. Vivamus tulvinar sapien id tellus sagittis posuere sed placerat ligula aliquam eu nam sapien eros enatis. In hac habitasse platea dictumst. Sed egestas suscipit adipiscing. Maecenas sed eros non libero tincidunt aliquet. Aliquam int risus elit, id eleifend tellus. Sed tempor pretium orci, vel lacinia felis placerat vitae. Duis dapibus, urna a aliquam egestas, enim lorem cursus ipsum molestie tincidunt tortor elis. et odio. Nullam metus arcu, eleifend nec elementum et, elementum eget nunc. Nam porta porta mauris a congue. Mauris vestibulum, libero sit amet suscipit consectetur, turpis odio cursus nisi, id tempor nibh purus in diam. Nunc faucibus ante ligula sit amet pulvinar egestase convallisist massa turpis egets sed facilisis magna eros, id dictum arcu lorem cubilia curae nulla stibulum justo vestibulum <a href="#"><em>egestas.</em></a></p>
                                                </article>

                                                <div class="blogpost_share">
                                                    <a href="#" class="ico_socialize_facebook1 ico_socialize type1"></a>
                                                    <a href="#" class="ico_socialize_twitter2 ico_socialize type1"></a>
                                                    <a href="#" class="ico_socialize_pinterest ico_socialize type1"></a>
                                                    <a href="#" class="ico_socialize_google2 ico_socialize type1"></a>
                                                    <div class="clear"><!-- ClearFix --></div>
                                                </div>                                                
                                            </div><!--.blog_post_preview -->
                                        </div>								
                                    </div><!-- .row-fluid -->

                                    <div class="row-fluid">                                
                                        <div class="span12">
                                            <div id="comments">
                                            	<div class="bg_title"><h4 class="headInModule postcomment">4 Comments:</h4></div>
                                                <ol class="commentlist">
                                                    <li class="comment depth-1">
                                                        <div class="stand_comment">
                                                            <div class="commentava"><img class="avatar photo" width="86" height="86" src="img/avatars/avatar1.jpg" alt=""></div>
                                                            <div class="thiscommentbody">
                                                                <div class="comment_info">
                                                                    <span class="author_name">Posted by <a class="url" rel="external nofollow" href="#">Tom Simpson</a></span>
                                                                    <span class="date">25 april 2019</span>
                                                                    <span class="comments"><a href="#respond" class="comment-reply-link">Reply</a></span>
                                                                </div>
                                                                <p>Nulla vel feugat mauris lorem vivamus bibendum, risus ut molestie convallis, sem lacus vehicula tellus sit amet pretium risus nisiset non felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <ul>
                                                            <li class="comment depth-2">
                                                                <div class="stand_comment">
                                                                    <div class="commentava"><img class="avatar photo" width="86" height="86" src="img/avatars/avatar2.jpg" alt=""></div>
                                                                    <div class="thiscommentbody">
                                                                        <div class="comment_info">
                                                                            <span class="author_name">Posted by <a class="url" rel="external nofollow" href="#">Anna Smith</a></span>
                                                                            <span class="date">26 april 2019</span>
                                                                            <span class="web_site"><a href="#">www.companyname.com</a></span>
                                                                            <span class="comments"><a href="#respond" class="comment-reply-link">Reply</a></span>
                                                                        </div>
                                                                        <p>Per inceptos himenaeos?</p>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <ul>
                                                                    <li class="comment depth-3">
                                                                        <div class="stand_comment">
                                                                            <div class="commentava"><img class="avatar photo" width="86" height="86" src="img/avatars/avatar1.jpg" alt=""></div>
                                                                            <div class="thiscommentbody">
                                                                                <div class="comment_info">
                                                                                    <span class="author_name">Posted by <a class="url" rel="external nofollow" href="#">Tom Simpson</a></span>                                                                                <span class="date">26 april 2019</span>
                                                                                    <span class="comments"><a href="#respond" class="comment-reply-link">Reply</a></span>
                                                                                </div>
                                                                                <p>Pellentesque consequat viverra ipsum, sed placerat ligula aliquam eu. Nam sapien eros enatis at dapibus facilisis, lacinia sagittis purus. Ut tuismod aliquet enim, nec egetes semper mi posueres nec lor nam nunc est, faucibus iaculis varius vitae, placerat quis felis nunceas  ultrices posuere cubilia curae nulla vestibulum eget justo sit amet loremt pulvinar convallisist massa. Donec pulvinar est euismod tortor euismod molestie. Fusce euismod ipsum eu tortor lacinia vitae vestibulum ante porttitor. Vivamus ac metus quam, quis posuere est. Integer nec lectus vel purus mattis ultricies at a sapien. Nulla interdum lobortis elit, eget semper justo euismod vel. Maecenas ut pretium elit. Sed et ligula at leo venenatis auctor. Nam viverra urna tortor, ut pulvinar lectus. Aenean nec rhoncus massa. Donec tellus turpis, malesuada viverra pellentesque et, porta ut dolor. Nunc lacinia velit a urna rutrum mollis. Sed auctor porttitor diam vel eleifend. Ut id orci arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                            </div>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                    </li>
                                                                </ul>                                                    
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="comment depth-1">
                                                        <div class="stand_comment">
                                                            <div class="commentava"><img class="avatar photo" width="86" height="86" src="img/avatars/avatar_none.jpg" alt=""></div>
                                                            <div class="thiscommentbody">
                                                                <div class="comment_info">
                                                                    <span class="author_name">Posted by <a class="url" rel="external nofollow" href="#">John Doe</a></span>
                                                                    <span class="date">25 april 2019</span>
                                                                    <span class="comments"><a href="#respond" class="comment-reply-link">Reply</a></span>
                                                                </div>
                                                                <p>Pellentesque consequat viverra ipsum, sed placerat ligula aliquam eu. Nam sapien eros enatis at dapibus facilisis, lacinia sagittis purus. Ut tuismod aliquet enim, nec semper mi posueres nec lor nam nunc est, faucibus iaculis varius vitae, placerat quis felis nunceas  ultrices posuere cubilia curae nulla vestibulum eget justo sit amet pulvinar convallisist massa. </p>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>                                        
                                                </ol>
                                            </div><!-- #comments -->
                                            <div id="respond">
	                                            <div class="bg_title"><h4 id="reply-title" class="headInModule postcomment">Leave a Comment! <small><a style="display:none;" href="#respond" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small></h4></div>
                                                <form id="commentform" method="post">
                                                    <label class="label-name"></label><input type="text" class="form_field" name="author" id="author" title="Name" value="Name"><div class="clear"></div>
                                                    <label class="label-email"></label><input type="text" class="form_field" name="email" id="email" title="Email" value="Email"><div class="clear"></div>
                                                    <label class="label-web"></label><input type="text" class="form_field" name="url" id="web" title="Web" value="Web"><div class="clear"></div>
                                                    <label class="label-message"></label><textarea class="form_field" id="comment-message" title="Comment*" rows="5" cols="45" name="comment">Comment*</textarea><div class="clear"></div>
                                                    <p class="form-submit">
                                                        <input type="reset" value="Clear form" id="reset" name="reset">
                                                        <input type="submit" value="Send!" id="submit" name="submit">
                                                        <input type="hidden" id="comment_post_ID" value="754" name="comment_post_ID">
                                                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                    </p>
                                                </form>
                                            </div>
                                        </div><!-- span12 -->
                                    </div><!-- .row-fluid -->                                    

                                    <div class="row-fluid">
                                        <div class="span12 module_cont module_feature_posts">
                                        	<div class="bg_title"><h4 class="headInModule">Featured Posts</h4></div>
                                            <div class="featured_slider">
                                                <div class="carouselslider featured_posts items4" data-count="4">
                                                    <ul class="item_list">                                                    
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_works1.jpg" alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Sounds Of New York City</a></h6>
                                                                        <span class="post_type post_type_video"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>                                          
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_works2.jpg"  alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Modern Dress code Policy</a></h6>
                                                                        <span class="post_type post_type_image"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>                                          
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_works3.jpg"  alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Stock Reports</a></h6>
                                                                        <span class="post_type post_type_text"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_blog3.jpg"  alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Sounds Of New York City</a></h6>
                                                                        <span class="post_type post_type_video"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>                                          
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_blog2.jpg"  alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Modern Dress code Policy</a></h6>
                                                                        <span class="post_type post_type_image"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>                                          
                                                        <li>
                                                            <div class="item">
                                                                <div class="img_block wrapped_img"><img src="img/pictures/carousel_blog1.jpg"  alt=""><div class="carousel_fadder"></div></div>
                                                                <div class="carousel_body">
                                                                    <div class="carousel_title">
                                                                        <h6><a href="#">Stock Reports</a></h6>
                                                                        <span class="post_type post_type_text"></span>
                                                                    </div>
                                                                    <div class="carousel_desc">	                                                                
                                                                        <div class="exc">Pellentesque consequat viverra lorem a gestas placerat ligula aliquam vestibulum.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>                                          
                                                    </ul>                        
                                                </div>
                                                <div class="clear"></div>
                                            </div><!-- .featured_slider -->
                                        </div><!-- .module_cont -->
                                    </div><!-- .row-fluid -->

                                    <div class="row-fluid">
                                        <div class="span12 module_cont">
                                            <a href="javascript:history.back()" class="shortcode_button btn_normal btn_type1 btn_back">Back</a>
                                        </div>								
                                    </div><!-- .row-fluid -->

                                </div><!-- .contentarea -->
                            </div>
                            <div class="left-sidebar-block span3">
                                //Sidebar Text
                            </div><!-- .left-sidebar -->
                        </div>
                        <div class="clear"><!-- ClearFix --></div>
                    </div><!-- .fl-container -->
                    <div class="right-sidebar-block span3">
                        <aside class="sidebar">
                        </aside>
                    </div><!-- .right-sidebar -->
                    <div class="clear"><!-- ClearFix --></div>
                </div>
            </div><!-- .container -->
        </div><!-- .content_wrapper -->
	
    </div><!-- .main_wrapper -->
	
    <div class="footer_twitter">
    	<div class="container">
			<div class="twitter_line"></div>
			<script>
				//<![CDATA[
				$(document).ready(function(){
					$('.twitter_line').tweet({
						modpath: 'twitter/',
						count: 1,
						username : 'themedev'
					 });
				});																								
				//]]
            </script>        	
        </div>
    </div><!-- .footer_twitter -->
    <div class="pre_footer">
        <div class="container">
            <aside id="footer_bar" class="row">
                <div class="span3">
                    <div class="sidepanel widget_flickr">
                        <div class="bg_title"><h4 class="sidebar_header">Flickr Photostream</h4></div>
                        <div class="flickr_widget_wrapper">
                            <script src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=92335820@N08"></script>
                        </div>
                    </div><!-- .sidepanel -->                        
                </div>                
                <div class="span3">
                    <div class="sidepanel widget_about">
                        <div class="bg_title"><h4 class="sidebar_header">About Our Company</h4></div>
                        <p>Pellentesque consequat viverra ipsum, sed <span class="light">placerat ligula</span> aliquam eu nam sapien stibulum ridiculus pellentesque eros!</p>
                        Venenatis at dapibus lacinia ac sagittis purus. Ut euismod aliquet enim, nec semper mi posuere nec lor nam nunc est, 
                        faucibus iaculis varius vitae placerat quis felis vivamues elementum dolor quis arcuege tristique viverra ipsum primis in faucibus 
                        <span class="light">orci luctus</span> et ultrices morbi nec suscipit lacus vestibulum ante.                        
                    </div>
                </div>
                <div class="span3">
                    <div class="sidepanel widget_posts">
                        <div class="bg_title"><h4 class="sidebar_header">Featured Posts</h4></div>
                        <ul class="recent_posts">
                            <li>
                                <div class="recent_posts_img">
                                    <img src="img/pictures/featured_widget1.jpg" width="86" height="86" alt="">
                                </div>
                                <div class="recent_posts_content">
                                    <span class="post_title">Pellentesque consequat</span>
                                    Viverra ipsum, sed placerat ligula aliquam eu nam sapien stibulum pellentesque ...
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="recent_posts_img">
                                    <img src="img/pictures/featured_widget2.jpg" width="86" height="86" alt="">
                                </div>
                                <div class="recent_posts_content">
                                    <span class="post_title">Lorem Ipsum dolor</span>
                                    Ipsum viverra, sed placerat ligula aliquam eu nam sapien stibulum eget ...
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div><!-- .sidepanel -->
                </div>
                <div class="span3">
                    <div class="sidepanel widget_mailchimpsf_widget">
                        <div class="bg_title"><h4 class="sidebar_header">Mailchimp widget</h4></div>
                        <p>Venenatis at dapibus facilisis lacinia ac sagittis purus. Ut euismod aliquet enim, nec semper mi posuere nec lor nam nunc est faucbus eget iaculis varius vitae placerat quis.</p>

                        <div class="mc_form_inside">
                            <div class="mc_merge_var">
                                <label class="mc_var_label" for="mc_mv_EMAIL">Email Address</label>
                                <input type="text" class="mc_input" id="mc_mv_EMAIL" name="mc_mv_EMAIL" value="" size="18" style="width: 255px;">
							</div><!-- /mc_merge_var -->
							<div class="mc_signup_submit">
								<input type="submit" class="mc_submit" value="Subscribe!" id="mc_signup_submit" name="mc_signup_submit">
							</div><!-- /mc_signup_submit -->
						</div>
					</div><!-- .widget_about -->
                </div>                
            </aside>
        </div>
    </div><!-- .pre_footer -->
    
    <footer>
        <div class="footer_line container">
        	<div class="copyright">&copy; 2020 Dixit Wordpress Theme. All Rights Reserved.</div>
            <div class="socials">
            	<ul class="socials_list">
                	<li><a href="#" class="ico_social-facebook"></a></li>
                    <li><a href="#" class="ico_social-twitter"></a></li>
                    <li><a href="#" class="ico_social-youtube"></a></li>
                    <li><a href="#" class="ico_social-gplus"></a></li>
                    <li><a href="#" class="ico_social-dribbble"></a></li>
                    <li><a href="#" class="ico_social-delicious"></a></li>
                    <li><a href="#" class="ico_social-tumblr"></a></li>
                </ul>            
            </div>
            <div class="clear"></div>
            <a href="javascript:void(0)" class="btn2top"></a>            
        </div>
        <div class="footer_border"></div>
    </footer>
    
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/theme.js"></script>
	
    <header class="fixed-menu"></header>
</body>
</html>