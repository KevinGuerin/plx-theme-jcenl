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
                <div class="content_block no-sidebar row">
                    <div class="fl-container span12">
                        <div class="row">
                            <div class="posts-block span12">
                                <div class="contentarea">
                                    
                                    <div class="row-fluid">
                                        <div class="span12 module_cont module_portfolio">
                                            <div class="filter_block">
                                                <div class="filter_navigation">
                                                    <ul id="options" class="splitter">
                                                        <li>
                                                            <ul data-option-key="filter" class="optionset">
                                                                <li class="selected"><a data-option-value="*" href="#filter">Tous</a></li>
                                                                <li><a title="Partenaires Institutionel" data-option-value=".institution" href="#filter">Institutions</a></li>
                                                                <li><a title="Partenaires Privé" data-option-value=".prive" href="#filter">Privé</a></li>
                                                                <li><a title="Partenaires Régionaux" data-option-value=".regional" href="#filter">Régionaux</a></li>
                                                                <li><a title="Partenaires Nationaux" data-option-value=".national" href="#filter">Nationaux</a></li>
                                                                <li><a title="Partenaires Média" href="http://www.jceneuillylevallois.org/index.php?tag/partenaires-media">Média</a></li>


                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!-- .filter_navigation -->
                                            </div><!-- .filter_block -->
    
                                            <div class="portfolio_block image-grid columns4" id="list">
                                            
                                                  <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>

                                                <div data-category="portraits" class="accounting element">
                                                    <div class="filter_img">
                                                        	<div class="view view-tenth portfolio_item">
	                                                            <img src="./data/images/articles/<?php echo $plxShow->artId(); ?>.jpg" width="249" height="249" alt="<?php $plxShow->artTitle() ?>" /> 
                                                                <div class="mask">
                                                                    <div class="portfolio_descr">
                                                                        <h2><?php $plxShow->artTitle('link'); ?></h2>
                                                                        <p><?php $plxShow->artChapo(); ?></p>                                                        
                                                                    </div>
                                                                </div>                                                                 
                                                                
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div><!-- .element -->

			                     <?php endwhile; ?>
                                                
                                                
                                            </div><!-- .portfolio_block -->
                                            <div class="clear"></div>
                                            <div class="load_more_cont"><?php $plxShow->pagination(); ?></div>
               
                                        </div><!-- .module_portfolio -->
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


</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>