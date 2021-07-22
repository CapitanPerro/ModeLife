<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-8c84">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <p class="u-small-text u-text u-text-variant u-text-1">Texto de ejemplo de pie de página</p>
  </div>
</footer>
        
<?php } ?>
        <?php $showBackLink = get_option('np_hide_backlink') ? false : true; ?>
<?php if ($showBackLink) : $GLOBALS['theme_backlink'] = true; ?>
<section class="u-backlink u-clearfix u-grey-80">
            <a class="u-link" href="web" target="_blank">
        <span>ModeLife-Themes</span>
            </a>
        <p class="u-text"><span>creado por</span></p>
        <a class="u-link" href="https://diegoportovillanueva.com" target="_blank"><span>T.DiZkyt</span></a>.
    </section>
<?php endif; ?>
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
