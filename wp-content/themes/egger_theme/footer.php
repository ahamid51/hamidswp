<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Egger_Theme
 * @since Egger Theme 1.0
 */
?>

<footer>
<?php $upload_dir = wp_upload_dir(); ?>
  <div class="footer_wrapper container">
    <a href="http://design.webgigs.in/demo/yellow/html/index.html" class="logo"><img src="<?php echo $upload_dir['baseurl']; ?>/logo.png" alt="" class="logo_def" height="43" width="222"><img src="YellowProject%20-%20HTML5&amp;CSS3%20business%20theme_files/logo_footer.png" alt="" class="logo_retina" height="43" width="222"></a>
    <div class="copyright">© 2020 YellowProject. HTML5 Business Theme. All Rights Reserved.</div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
