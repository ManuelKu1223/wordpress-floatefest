<?php
namespace App;

use Sober\Controller\Controller;
use WP_Query;

class Home extends Controller
{

  public function blogBackground() {
    $background_id = get_field('blog_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }
}

?>
