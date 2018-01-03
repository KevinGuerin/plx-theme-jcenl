<?php if(!defined('PLX_ROOT')) exit; ?>

                                    <div class="row-fluid">                                
                                        <div class="span12">
                                            <div id="comments">
                                            	<div class="bg_title"><h4 class="headInModule postcomment"><?php echo $plxShow->artNbCom() ?><?php if($plxShow->plxMotor->plxRecord_coms): ?></h4></div>
                                                <ol class="commentlist">
                                                    <?php while($plxShow->plxMotor->plxRecord_coms->loop()): # On boucle sur les commentaires ?>
                                                   
                                                    <li class="comment depth-1">
                                                        <div  id="<?php $plxShow->comId(); ?>" class="stand_comment">
                                                            <div class="commentava"><img class="avatar photo" width="86" height="86" src="img/avatars/avatar_none.jpg" alt=""></div>
                                                            <div class="thiscommentbody">
                                                                <div class="comment_info">
                                                                    <span class="author_name"><?php $plxShow->comAuthor('link'); ?> <?php $plxShow->lang('SAID') ?> : </p></span>
                                                                    <span class="date"><?php $plxShow->comDate('#day #num_day #month #num_year(4) &#64; #hour:#minute'); ?> </span>
                                                                    <span class="comments"><a href="#respond" class="comment-reply-link">Reply</a></span>
                                                                </div>
                                                                <p class="content_com type-<?php $plxShow->comType(); ?><?php $plxShow->comContent() ?> 
																<a class="num-com" href="<?php $plxShow->ComUrl(); ?>" title="#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?>">#<?php echo $plxShow->plxMotor->plxRecord_coms->i+1 ?></a>
																</p>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </li>  
		                                     <?php endwhile; # Fin de la boucle sur les commentaires ?>                                      
                                                </ol>
												
												<?php $plxShow->comFeed('rss',$plxShow->artId()); ?>
												
												<?php endif; ?>

												<?php if($plxShow->plxMotor->plxRecord_arts->f('allow_com') AND $plxShow->plxMotor->aConf['allow_com']): ?>

                                            </div><!-- #comments -->
                                            <div id="respond">
	                                            <div class="bg_title"><h4 id="reply-title" class="headInModule postcomment"><?php $plxShow->lang('WRITE_A_COMMENT') ?><small><a style="display:none;" href="#respond" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a></small></h4></div>
                                                <form id="commentform" action="<?php $plxShow->artUrl(); ?>#form" method="post">
                                                    <label class="label-name"><?php $plxShow->lang('NAME') ?> :</label><input type="text" class="form_field" name="author" id="author" title="Name" size="20" maxlength="30" value="<?php $plxShow->comGet('name',''); ?>"><div class="clear"></div>
                                                    <label class="label-email"><?php $plxShow->lang('EMAIL') ?> :</label><input type="text" class="form_field" name="email" id="email" title="Email" size="20" value="<?php $plxShow->comGet('mail',''); ?>"><div class="clear"></div>
													<label class="label-web"><?php $plxShow->lang('WEBSITE') ?> :</label><input type="text" class="form_field" name="url" id="web" title="Web" size="20" value="<?php $plxShow->comGet('site',''); ?>"><div class="clear"></div>
                                                    <label class="label-message"><?php $plxShow->lang('COMMENT') ?> :</label><textarea class="form_field" id="comment-message" title="Comment*" rows="5" cols="45" name="comment"><?php $plxShow->comGet('content',''); ?></textarea><div class="clear"></div>
                                                    <?php $plxShow->comMessage(); ?>
													<?php if($plxShow->plxMotor->aConf['capcha']): ?>
														<label class="label-antispam"><?php echo $plxShow->lang('ANTISPAM_WARNING') ?></strong> :</label><input type="text" class="form_field" name="url" id="web" title="Web" value="Web"><div class="clear"></div>
														<?php $plxShow->capchaQ(); ?> : <input id="id_rep" name="rep" type="text" size="2" maxlength="1" />
													<?php endif; ?>
                                                    <p class="form-submit">
                                                        <input type="reset" value="Clear form" id="reset" name="reset">
                                                        <input type="submit" value="<?php $plxShow->lang('SEND') ?>" id="submit" name="submit">
                                                        <input type="hidden" id="comment_post_ID" value="754" name="comment_post_ID">
                                                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                    </p>
                                                </form>
													<?php else: ?>
													
															<p>
			<?php $plxShow->lang('COMMENTS_CLOSED') ?>.
		</p>

	<?php endif; # Fin du if sur l'autorisation des commentaires ?>
                                            </div>
                                        </div><!-- span12 -->
                                    </div><!-- .row-fluid -->