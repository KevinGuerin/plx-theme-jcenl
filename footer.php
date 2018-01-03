<?php if(!defined('PLX_ROOT')) exit; ?>

    <div class="footer_twitter">
    	<div class="container">
			<div class="twitter_line"></div>
			<script>
				<![CDATA[
				$(document).ready(function(){
					$('http://api.twitter.com/1/statuses/user_timeline.rss').tweet({
						modpath: 'twitter/',
						count: 2,
						username : 'jceneuillyetc'
					 });
				});																								
				// ]]>
            </script>        	
        </div>
    </div><!-- .footer_twitter -->
    <div class="pre_footer">
        <div class="container">
            <aside id="footer_bar" class="row">
               <div class="span3">
                    <div class="sidepanel widget_about">
                        <div class="bg_title"><h4 class="sidebar_header">A Propos</h4></div>
                 <p>La JCE rassemble des hommes et des femmes de moins de 40 ans, citoyens impliqués dans la vie de leur cité.</p>
		<p>Association loi 1901 affiliée à la <a href="http://www.jcef.fr"  target="_blank" title="Jeune Chambre Economique Française">Jeune Chambre Économique Française</a>, reconnue d'utilité publique par décret du 10 juin 1976 et <a href="http://www.jci.cc"  target="_blank" title="Jeune Chambre Internationale">membre JCI</p>                     
                    </div>
                </div>
                <div class="span3">
                    <div class="sidepanel widget_flickr">
                        <div class="bg_title"><h4 class="sidebar_header">Mission & Vision</h4></div>
                        <div class="flickr_widget_wrapper">
                               <p>Notre Vision est d’être le principal réseau mondial de jeunes citoyens actifs.</p>
                               <p>Notre Mission est d’offrir des opportunités de développement aux jeunes en leur donnant la capacité de créer des changements positifs.</p>
                        </div>
                    </div><!-- .sidepanel -->                        
                </div>  
                <div class="span3">
                    <div class="sidepanel widget_posts">
                        <div class="bg_title"><h4 class="sidebar_header">A Venir</h4></div>
                        <ul class="recent_posts">
                            
					<?php $plxShow->lastArtList($format='
                                         <li>
					<div class="recent_posts_img"><a href="#art_url" title="#art_title"><img src="./data/images/articles/#art_id.tb.jpg" width="86" height="86" alt="#art_title" /></a></div>
					<div class="recent_posts_content"><a href="#art_url" title="#art_title">#art_title</a></div>
                                        <div class="clear"></div>
                                        </li>
					',$max=2,$cat_id='7',$ending=''); ?>

                        </ul>
                    </div><!-- .sidepanel -->
                </div>
                <div class="span3">
                    <div class="sidepanel widget_mailchimpsf_widget">
                        <div class="bg_title"><h4 class="sidebar_header">Newsletter</h4></div>
                        <p>Recevez notre lettre d'information</p>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
	<form action="http://jceneuillylevallois.us7.list-manage.com/subscribe/post?u=37f74425a242f89e71d4de2b6&amp;id=9bac50b50f" class="validate" id="mc-embedded-subscribe-form" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
		<input class="email" id="mce-EMAIL" name="EMAIL" placeholder="Votre adresse email" required="" type="email" value="" />
		<div class="clear">
			<input class="mc_submit"" id="mc-embedded-subscribe" name="subscribe" type="submit" value="S'inscrire" /></div>
	</form>
</div>
<!--End mc_embed_signup-->

  </div><!-- .widget_about -->
                </div>                
            </aside>
        </div>
    </div><!-- .pre_footer -->
    
    <footer>
        <div class="footer_line container">
        	<div class="copyright">&copy; Jeune Chambre Économique <?php $plxShow->mainTitle(''); ?> - 
                 <?php $plxShow->lang('POWERED_BY') ?> <a href="http://pluxml4jci.kg2i.eu" title="Theme & Plugin PluXml for JCI">PluXml 4 JCI</a>
		  <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> </div>
            <div class="socials">
            	<ul class="socials_list">
                        <li><a href="https://www.facebook.com/page.neuillylevallois" class="ico_social-facebook"></a></li>
                        <li><a href="https://twitter.com/jceneuillyetc" class="ico_social-twitter"></a></li>
                        <!--
                        <li><a href="#" class="ico_social-youtube"></a></li>
                        <li><a href="#" class="ico_social-gplus"></a></li>
                        <li><a href="#" class="ico_social-dribbble"></a></li>
                        <li><a href="#" class="ico_social-delicious"></a></li>
                        <li><a href="#" class="ico_social-tumblr"></a></li>
                         -->
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