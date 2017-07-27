<div class="blog_wrap">
	<header class="blog-header">
                  <div class="white_container">
                    <div class="col-xs-2 col-sm-1 col-md-1">
                        <nav class="dpmenu" id="theMenu">
						<div class="dpmenu-wrap">
						<h2>BLOG ARCHIVES</h2>
						<hr/>
							 <?php if (!empty($page['blog_menu'])): ?>
									<?php print render($page['blog_menu']); ?>
							<?php endif; ?>
							</div>
						<div id="dpmenuToggle"><i class="icon-reorder"></i></div>
						</nav>
                    </div>
                    <div class="col-xs-10 col-sm-7 col-md-7">
						<div class="blog-logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						        <?php print '<img src="'.base_path() . path_to_theme() .'/images/logo.png" title="White Magic Blog" alt="White Magic" />';?><span class="visible-xs">WM Blog</span><span class="hidden-xs">WhiteMagic Adventure Blog</span></a>
						</div>
					</div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                     <?php if (!empty($page['blog_header'])): ?>
									<?php print render($page['blog_header']); ?>
					<?php endif; ?>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </header>
			<p class="blog-image-caption">
			<span>
			<?php //if ($node->type=='blog'){ 
			// }else{ ?>
			WhiteMagic Adventure Blog 
			<?php //} ?>
			</span></p>
	</div>		  