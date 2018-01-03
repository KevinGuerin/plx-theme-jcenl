<?php include(dirname(__FILE__).'/header.php'); ?>

<section>

 <div class="main_wrapper">
        <!-- C O N T E N T -->
        <div class="content_wrapper">
        	<div class="page_title_block">
            	<div class="container">
                    <h1 class="title"><?php $plxShow->staticTitle(); ?></h1>
                    <div class="breadcrumbs"><?php eval($plxShow->callHook('MyBreadcrumb')) ?></div>
                </div>
            </div>        
            <div class="container">
                <div class="content_block right-sidebar row">
                    <div class="fl-container span9">
                        <div class="row">
                            <div class="posts-block span9">
                                <div class="contentarea">
                                    
                                    <div class="row-fluid">                                
                                        <div class="span12 module_cont module_blog">
                                        
                                            <div class="blog_post_page">
                                                <div class="featured_image_full">
							<center><?php 
				                                   $fileId = $plxShow->staticId();
				                                   $filename = "data/images/$fileId/$fileId_cover_1230x450.jpg"; 
				
				                                   if(@file($filename)!=""){
				                                   print " <img src=$filename  />";
				                                   }else{
				                                   print "";
				                                   }
				                         ?></center>

                                                </div><!-- .featured_image_full -->
                                                <article class="contentarea">
                                                    <?php $plxShow->staticContent(); ?>
                                                 </article>

                                                <div class="blogpost_share">
                                                    <?php eval($plxShow->callHook('MySocialButtons')) ?>
                                                    <div class="clear"><!-- ClearFix --></div>
                                                </div>                                                
                                            </div><!--.blog_post_preview -->
                                        </div>								
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

                                 <?php include(dirname(__FILE__).'/sidebar.php'); ?>
                        
                        </aside>
                    </div><!-- .right-sidebar -->
                    <div class="clear"><!-- ClearFix --></div>
                </div>
            </div><!-- .container -->
        </div><!-- .content_wrapper -->
	
    </div><!-- .main_wrapper -->

</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>