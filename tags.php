<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
    
    <div class="main_wrapper">
        <!-- C O N T E N T -->
        <div class="content_wrapper">
        	<div class="page_title_block">
            	<div class="container">
                    <h1 class="title"><?php echo $plxShow->plxMotor->cible; ?></h1>
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
                                        <div class="span12 module_cont module_testimonial">
											<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>   
                                        	<div class="bg_title"><h4 class="headInModule"><?php $plxShow->artTitle('link'); ?></h4></div>                                            
                                            <div class="module_content blockquote testimonials_list carouselslider items1" data-count="1">
                                                <ul>
													
                                                    <li>
                                                        <div class="item">
                                                            <div class="testimonials_photo">
                                                                
																<?php 
																$fileId = $plxShow->artId();
																$filename = "data/images/article_$fileId/logo_$fileId.tb.jpg"; 
				
																if(@file($filename)!=""){print " <img src=$filename />";}
																else{print "";}
																?>
																
                                                            </div>
                                                            <div class="testimonials_text">                                                                
                                                                <p><?php $plxShow->artChapo(); ?></p>
                                                                <span class="author"></span>
                                                            </div>
                                                        </div>
                                                    </li>
													
                                                </ul>
                                                <a id="anchor11"></a>
                                            </div>
											<?php endwhile; ?>
                                        </div>
                                    </div><!-- .row-fluid -->                                         
                                            
			<div id="pagination">
				<?php $plxShow->pagination(); ?>
			</div>

			<div class="rss">
				<?php $plxShow->tagFeed() ?>
			</div>


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