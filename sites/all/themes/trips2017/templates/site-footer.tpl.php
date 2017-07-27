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