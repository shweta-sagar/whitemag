<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

      <div class="wm_over">
      <!-- Push Wrapper -->
             
        <div class="container-fluid">
          <div class="row">
            <div class="home_wrap">
              <div class="homepage_bg">
              <div id="sticky-anchor"></div>
              <div id="sticky">
                <!--Main Header-->
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
						        <?php print '<img src="'.base_path() . path_to_theme() .'/images/logo2.png" title="White Magic" alt="White Magic" />';?></a>
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
                              <?php if (!empty($page['wishlist'])): ?>
							  <div class="filters_checks wishlist_scroller simplebar" data-simplebar-direction="vertical">
								<?php print render($page['wishlist']); ?>
							  </div>	
							 <?php endif; ?>
                            </div>
                          </li>
                          <li><a href="/user" title="My account"><i class="icon-user"></i></a>
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
           
                
                </div>
                
                <!--Discover-->
               <?php if (!empty($page['banner'])): ?>
					<?php print render($page['banner']); ?>
			    <?php endif; ?>
                <!--Discover-->
                </div>
              </div>
			  <?php if (!empty($page['after_banner'])): ?>
					<?php print render($page['after_banner']);?>
			  <?php endif; ?>
			   
            </div>
          </div>
          <!-- SECOND PAGE CONTENT-->

          
         <div class="row">
            <div class="white-wrapper">
           	  <?php if (!empty($page['before_content'])): ?>
					<?php print render($page['before_content']); ?>
			  <?php endif; ?>
			  <div class="clearfix"></div>
				<?php if (!empty($page['content'])): ?>
					<?php print render($page['content']); ?>
			  <?php endif; ?>
			  <div class="clearfix"></div>			  
              <?php if (!empty($page['after_content'])): ?>
					<?php print render($page['after_content']); ?>
			  <?php endif; ?>
              <div class="clearfix"></div>         
              </div>
          </div>
          <!--footer-->
          <div class="row">
            <footer>
              <div class="white-wrapper">
                <?php if (!empty($page['footer_left'])): ?>
					<?php print render($page['footer_left']); ?>
				 <?php endif; ?>
                <?php if (!empty($page['footer_newsletter'])): ?>
					<?php print render($page['footer_newsletter']); ?>
				 <?php endif; ?>
                <div class="clearfix"></div>
                <?php if (!empty($page['footer_brands'])): ?>
					<?php print render($page['footer_brands']); ?>
				 <?php endif; ?>
                <?php if (!empty($page['footer_social'])): ?>
					<?php print render($page['footer_social']); ?>
				 <?php endif; ?>
                <div class="clearfix"></div>
              </div>
            </footer>
          </div>
          <!--footer-->
         
         <a id="bodyscroll"></a>
      </div>
    </div> 