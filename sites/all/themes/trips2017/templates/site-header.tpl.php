                 <!--Main Header-->
                <header>
				  <div class="white_container">
				   <div class="col-xs-12 col-sm-6 headLogo">
                      <div class="inside_header_part1">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						        <?php print '<img src="'.base_path() . path_to_theme() .'/images/logo.png" title="White Magic" alt="White Magic" />';?><span>White Magic Adventure</span></a>
                      </div>
                    </div>
					<div class="col-xs-12 col-sm-6 searchForm">
						<?php if (!empty($page['navigation'])): ?>
							<?php print render($page['navigation']); ?>
						<?php endif; ?>
					</div>
					<div class="clearfix"></div>
				  </div>	
                  <div class="white_container">
				   <div id="sticky-anchor"></div>
 <div id="sticky">
				   <nav id="navbar" role="banner" class="navbar navbar-default">
  <div class="main-container">
    <div class="navbar-header" style="float:left">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div>
        <nav class="collapse navbar-collapse" id="navbar-collapse-1">
		<div class="col-xs-12 col-sm-8 col-md-9">
          <?php if ($main_menu): ?>
								<?php print theme('links__system_main_menu', array(
								  'links' => $main_menu,
								  'attributes' => array(
								  'id' => 'main-nav',
								  'class' => 'menu-top',
								  ),
								)); ?>
		  <?php endif; ?>					
          </div>
		  
		</nav>
		<div class="col-xs-12 col-sm-4 col-md-3 nav-secLink">
                      <div class="inside_header_part2 text-right">
                        <ul>
                          <li class="rightNav">
                            <a href="#"><i class="icon-star-empty"></i><span class="secLinks">Favourites</span></a>
                            <div class="wht_mgc_dd">
                              <div class="double_arrow">
                                <p class="arrow_one"></p>
                                <p class="arrow_two"></p>
                              </div>
                              <?php if (!empty($page['wishlist'])): ?>
							  <div class="filters_checks wishlist_scroller simplebar" data-simplebar-direction="vertical">
								<?php print render($page['wishlist']); ?>
							  </div>	
							 <?php endif; ?>
                            </div>
                          </li>
                          <li class="rightNav"><a href="/user" title="My account"><i class="icon-user"></i>
						  <?php if($user->uid){?>
							  <span class="secLinks">My Account</span>
							  <?php }else{ ?>
							  <span class="secLinks">Login</span>  
							  <?php } ?>
							  </a>
						  <?php if ($secondary_menu): ?>
						  <div class="wht_mgc_dd">
                              <div class="double_arrow">
                                <p class="arrow_one"></p>
                                <p class="arrow_two"></p>
                              </div>
						  
								<?php print theme('links__system_secondary_menu', array(
								  'links' => $secondary_menu,
								  'attributes' => array(
									'id' => 'secondary-menu-links',
									'class' => array('links', 'inline', 'clearfix'),
								  ),
								  'heading' => array(
									'text' => t('Secondary menu'),
									'level' => 'h2',
									'class' => array('element-invisible'),
								  ),
								)); ?>
						 

							</div> <!-- /#secondary-menu -->
							<?php endif; ?>
						  </li>
                        </ul>
                      </div>
                    </div>
      </div>
    <?php endif; ?>
	
  </div>
</nav>
</div>				    
                    <div class="clearfix"></div>
                  </div>
                </header>
