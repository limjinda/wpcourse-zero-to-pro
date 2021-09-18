<?php 
  if ( in_category('Promotion') ) {
    get_template_part('views/single', 'promotion');
  } else {
    get_template_part('views/single', 'featured');
  } 
?>
