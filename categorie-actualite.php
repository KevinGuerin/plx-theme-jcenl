<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
    
    <div class="main_wrapper">
        <!-- C O N T E N T -->
        <div class="content_wrapper">
        	<div class="page_title_block">
            	<div class="container">
                    <h1 class="title"><?php $plxShow->catName(); ?></h1>
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
                                        
                                            <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
                                                  <div class="blog_post_preview">
	                                            <div class="bg_title"><h4><?php $plxShow->artTitle('link'); ?></h4></div>
                                                <div class="blogpost_info_wrapper">                                                                                                        
                                                    <div class="blog_info_block">
                                                    	<span class="post_type post_type_image"></span>
                                                        <div class="blog_author"><?php $plxShow->artAuthor(); ?></div>
                                                        <div class="blog_categ"><?php $plxShow->artTags(); ?></div>
                                                        <div class="blog_comments"><?php $plxShow->artNbCom(); ?></div>
                                                    </div>
                                                </div>
                                                <div class="featured_image_full">
							<center><?php 
				                                   $fileId = $plxShow->artId();
				                                   $filename = "data/images/articles/$fileId.jpg"; 
				
				                                   if(@file($filename)!=""){
				                                   print " <img src=$filename />";
				                                   }else{
				                                   print "";
				                                   }
				                         ?></center>
                                                </div><!-- .featured_image_full -->
                                                <article class="contentarea">
                                                   <?php $plxShow->artChapo(); ?>
                                                </article>
                                            </div><!--.blog_post_preview -->
                                             <?php endwhile; ?>
                                         
                                            
                                            <ul class="pagerblock">
                                                <?php $plxShow->pagination(); ?>
                                            </ul><!-- .pagerblock -->
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