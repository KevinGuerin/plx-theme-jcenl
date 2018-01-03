<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside role="complementary">

                                <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">Newsletter</h4></div>
                                
                                <!-- Begin MailChimp Signup Form -->
                                <div id="mc_embed_signup">
	                        <form action="http://jceneuillylevallois.us7.list-manage.com/subscribe/post?u=37f74425a242f89e71d4de2b6&amp;id=9bac50b50f" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
		                 <input class="email" id="mce-EMAIL" name="EMAIL" placeholder="Votre adresse email" required="" type="email" value="" />
		                <div class="clear">
			         <input class="mc_submit"" id="mc-embedded-subscribe" name="subscribe" type="submit" value="S'inscrire" /></div>
	                          </form>
                                   </div>
                                 <!--End mc_embed_signup-->

                            </div><!-- .sidepanel -->


                            <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">AGENDA</h4></div>
                                <ul class="recent_posts">
					<?php $plxShow->lastArtList($format='
							<li>
                                                                <div class="recent_posts_img"><a href="#art_url" title="#art_title"><img src="./data/images/articles/#art_id.tb.jpg" width="86" height="86" alt="#art_title" /></a></div>
							         <div class="recent_posts_content"><span class="post_title"><a href="#art_url" title="#art_title">#art_title</a></span></div>
                                                                 <div class="clear"></div>
                                                                 </li>
							          ',$max=2,$cat_id='7',$ending=''); 
                                            ?>
                                </ul>
                            </div><!-- .sidepanel -->

                            <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">Dans votre ville</h4></div>
<iframe src="http://www.meetup.com/Junior-Chamber-International/embeds/soonest_event_list?css=&amp;w=300&amp;bg=light" width="300" height="660" frameborder="0" border="0" allowtransparency="true" scrolling="no"></iframe>
                            </div><!-- .sidepanel -->


                            <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">NOS PROJETS</h4></div>
                                <ul class="recent_posts">
					<?php $plxShow->lastArtList($format='
							<li>
                                                                <div class="recent_posts_img"><a href="#art_url" title="#art_title"><img src="./data/images/articles/#art_id.tb.jpg" width="86" height="86" alt="#art_title" /></a></div>
							         <div class="recent_posts_content"><span class="post_title"><a href="#art_url" title="#art_title">#art_title</a></span></div>
                                                                 <div class="clear"></div>
                                                                 </li>
							          ',$max=3,$cat_id='2',$ending=''); 
                                            ?>
                                </ul>
                            </div><!-- .sidepanel -->

                            <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">DERNIERS ARTICLES</h4></div>
                                <ul class="recent_posts">
					<?php $plxShow->lastArtList($format='
							<li>
                                                                <div class="recent_posts_img"><a href="#art_url" title="#art_title"><img src="./data/images/articles/#art_id.tb.jpg" width="86" height="86" alt="#art_title" /></a></div>
							         <div class="recent_posts_content"><span class="post_title"><a href="#art_url" title="#art_title">#art_title</a></span></div>
                                                                 <div class="clear"></div>
                                                                 </li>
							          ',$max=2,$cat_id='1',$ending=''); 
                                            ?>
                                </ul>
                            </div><!-- .sidepanel -->

                            <div class="sidepanel widget_posts">
                                <div class="bg_title"><h4 class="sidebar_header">RECHERCHE</h4></div>
                                <ul class="recent_posts">
                                          <?php eval($plxShow->callHook('MySearchForm')) ?>
                                </ul>
                            </div><!-- .sidepanel -->

                            <div class="sidepanel widget_twitter">
                                <div class="bg_title"><h4 class="sidebar_header">Tweets</h4></div>
                                <ul class="twitter_list tweet_1057"></ul>
                                <script>
									//<![CDATA[
										$(document).ready(function(){
											$('.tweet_1057').tweet({
												modpath: 'twitter/',
												count: 3,
												username : 'jceneuillyetc'
											 });
										});																								
									//]]
                                </script>
                            </div><!-- .widget_twitter -->                       

	</aside>