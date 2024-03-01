<?php
/**
 *  footer.
 */
?>
		
</div><!-- close .row -->
</div><!-- close .container -->
</div><!-- close .site-content -->

<div id="footer-area">
  <div class="container footer-inner">
    <div class="row">
      <?php get_sidebar( 'footer' ); ?>
    </div>
  </div>

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info container">
      <div class="row">
        <?php
          if ( of_get_option( 'footer_social' ) ) {
	  sparkling_social_icons();}
        ?>
	<nav role="navigation" class="col-md-6">
	  <?php sparkling_footer_links(); ?>
	</nav>
	  <div class="copyright col-md-6">
	    <p>©2019 Black & White Financial<br/>
	       Sub of ©<a href="www.srbridge.com">SRBridge</a> we power the web.
          </p>
	  
	  </div>
        </div>
      </div><!-- .site-info -->
      <div class="scroll-to-top">
        <i class="fa fa-angle-up"></i>
      </div><!-- .scroll-to-top -->
    </footer><!-- #colophon -->
  </div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
