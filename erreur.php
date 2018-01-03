<?php include(dirname(__FILE__).'/header.php'); ?>

<section>
    
    <div class="main_wrapper">
        <!-- C O N T E N T -->
        <div class="content_wrapper">
            <div class="container">
                <div class="content_block no-sidebar row">
                    <div class="fl-container span12">
                        <div class="row">
                            <div class="posts-block span12">
                                <div class="contentarea">

									<div class="module_line_trigger" data-option="page404" data-background="#e1e1e1 url(img/bg_pattern1.png) repeat 0 0" data-top-padding="top_padding_normal" data-bottom-padding="module_normal_padding">
                                        <div class="row-fluid">
                                            <div class="span12 module_cont module_404">
                                                <div class="wrapper404">
                                                    <div class="block404">
                                                        <h1 class="title404"><?php $plxShow->lang('ERROR'); ?></h1>
                                                        <div class="text404"><?php $plxShow->erreurMessage(); ?></div>
                                                    </div>
                                                    <div class="search_form">
                                                        <?php eval($plxShow->callHook('MySearchForm')) ?>
                                                    </div>                                              
                                                </div>
                                            </div>								
                                        </div><!-- .row-fluid -->                                
                                    </div><!-- .module_line_trigger -->
                                
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