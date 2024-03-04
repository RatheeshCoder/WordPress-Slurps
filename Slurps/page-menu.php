<?php get_template_part("./loading");  ?>
   <!-- Content to be shown after loading -->
   <div div id="content" style="opacity: 0;" class="content">

<?php
get_template_part("./header");

?>

<?php
while ( have_posts() ) :
	the_post(); 
	get_template_part( 'templates/template-menu' );
endwhile;

?>


<?php

get_template_part("./footer");
?>

</div>