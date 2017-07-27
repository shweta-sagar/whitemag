 <div id="sticky-anchor"></div>
              <div id="sticky"> 
 <header>
                  <div class="white_container">
                    <div class="col-xs-4 col-sm-3 col-md-3">
                        <nav class="dpmenu" id="theMenu">
						<div class="dpmenu-wrap">

						  <?php if ($main_menu): ?>
								<?php print theme('links__system_main_menu', array(
								  'links' => $main_menu,
								  'attributes' => array(
								  'id' => 'main-nav',
								  'class' => 'menu1',
								  ),
								)); ?>
							<?php if (!empty($page['contact_links'])): ?>
									<?php print render($page['contact_links']); ?>
								<?php endif; ?>	
							<?php endif; ?>
							</div>
						<div id="dpmenuToggle"><i class="icon-reorder"></i></div>
						</nav>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-6">
                      <div class="inside_header_part1 text-center">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						        <?php print '<img src="'.base_path() . path_to_theme() .'/images/logo.png" title="White Magic" alt="White Magic" />';?></a>
                      </div>
                    </div>
                    <div class="col-xs-4 col-sm-3 col-md-3">
                      <div class="inside_header_part2 text-right">
                        <ul>
                          <li>
                            <a href="#"><i class="icon-heart-empty"></i></a>
                            <div class="wht_mgc_dd">
                              <div class="double_arrow">
                                <p class="arrow_one"></p>
                                <p class="arrow_two"></p>
                              </div>
                              <ul>
                                <li>
                                  <span class="span_one">
                                    <h2><a href="#">Ama Dablam, Everest Base Camp</a></h2>
                                    <p>12 JAN 2016 - 23 JAN 2016</p>
                                    <h3><i class="icon-rupee"></i> 1,01,250</h3>
                                  </span>
                                  <span class="span_two">
                                    <img src="images/mod7.png" />
                                    <p>7</p>
                                    <b>MODERATE</b>
                                  </span>
                                  <div class="clearfix"></div>
                                </li>
                                <li>
                                  <span class="span_one">
                                    <h2><a href="#">Ama Dablam, Everest Base Camp</a></h2>
                                    <p>12 JAN 2016 - 23 JAN 2016</p>
                                    <h3><i class="icon-rupee"></i> 1,01,250</h3>
                                  </span>
                                  <span class="span_two">
                                    <img src="images/mod7.png" />
                                    <p>7</p>
                                    <b>MODERATE</b>
                                  </span>
                                  <div class="clearfix"></div>
                                </li>
                                <li>
                                  <span class="span_one">
                                    <h2><a href="#">Ama Dablam, Everest Base Camp</a></h2>
                                    <p>12 JAN 2016 - 23 JAN 2016</p>
                                    <h3><i class="icon-rupee"></i> 1,01,250</h3>
                                  </span>
                                  <span class="span_two">
                                    <img src="images/mod7.png" />
                                    <p>7</p>
                                    <b>MODERATE</b>
                                  </span>
                                  <div class="clearfix"></div>
                                </li>
                              </ul>
                            </div>
                          </li>
                          <li><a href="/user"><i class="icon-user"></i></a>
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
                    <div class="clearfix"></div>
                  </div>
                </header>
                <!--Main Header-->
                 <?php if (!empty($page['header'])): ?>
					<?php print render($page['header']); ?>
			    <?php endif; ?>
           
                
                
                <!--Discover-->
               <?php if (!empty($page['banner'])): ?>
					<?php  print render($page['banner']); ?>
			    <?php endif; ?>
                <!--Discover-->
                
			  <?php if (!empty($page['after_banner'])): ?>
					<?php print render($page['after_banner']);?>
			  <?php endif; ?>
     </div>