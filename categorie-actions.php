<?php include(dirname(__FILE__).'/header.php'); ?>
		
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
                <div class="content_block no-sidebar row">
                    <div class="fl-container span12">
                        <div class="row">
                            <div class="posts-block span12">
                                <div class="contentarea">
    
                                            <div class="portfolio_block image-grid columns1" id="list">
                                            
                                                <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
                                                <div data-category="portraits" class="accounting element row-fluid">
                                                    <div class="filter_img span6">
                                                                           <?php 
				                                  $fileId = $plxShow->artId();
				                                   $filename = "data/images/articles/$fileId.jpg"; 
				
				                                   if(@file($filename)!=""){
				                                    print " <img class=\"img-artdroite\" width=\"400\" src=$filename /> ";
				                                     }else{
				                                     print "";
				                                     }
				                                     ?>
                                                    </div>
                                                    <div class="portfolio_dscr span6">                                            
                                                        <div class="bg_title"><h4><?php $plxShow->artTitle('link'); ?></h4></div>
                                                        <p><?php $plxShow->artChapo(); ?></p>
                                                    </div>                                        
                                                </div><!-- .element --> 
				
				
				
				
				<p class="clear"></p>
			</section>
			
			<?php endwhile; ?>
                         <?php $plxShow->pagination(); ?>
                                                    </div>                                        
                                                </div><!-- .element -->

                                            </div><!-- .portfolio_block -->
                                            <div class="clear"></div>
                                            <div class="load_more_cont"></div>
                                           
    
 <?php include(dirname(__FILE__).'/footer.php'); ?>