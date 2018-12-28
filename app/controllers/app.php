<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function festivalDate() {
      return get_field('date', 'options');
    }

    public static function get_image_by_id($imageID, $size = "full")
    {
      $image = wp_get_attachment_image_src($imageID, $size);
      return $image[0];
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function logo()
    {
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
        return esc_url( $logo[0] );
      }
    }

    public function videos() {
      $video_list = wp_get_recent_posts(array(
        'numberposts' => -1,
        'post_type' => 'video',
        'post_status' => 'publish'
      ));

      return $video_list;
    }

    public function faq() {
      $freaquently_asked_questions = wp_get_recent_posts(array(
        'numberposts' => -1,
        'post_type' => 'faq',
        'post_status' => 'publish'
      ));

      $pieces = array_chunk($freaquently_asked_questions, ceil(count($freaquently_asked_questions) / 2));

      return $pieces;
    }

    public function tickets()
    {
      $tickets = wp_get_recent_posts(array(
        'post_type' => 'ticket',
        'numberposts' => -1,
        'post_status' => 'publish'
      ));

      return $tickets;
    }

    public static function get_tickets_by_category($category = '') {
      $tickets = wp_get_recent_posts(array(
        'post_type' => 'ticket',
        'numberposts' => -1,
        'post_status' => 'publish',
        'tax_query' => array(
          array(
            'taxonomy' => 'ticket_type',
            'field' => 'name',
            'terms' => $category,
          )
        )
      ));

      return $tickets;
    }

    public function sponsors() {
      $sponsors = get_posts(array(
        'numberposts' => -1,
        'post_type' => 'sponsor',
        'post_status' => 'publish'
      ));


      return $sponsors;
    }
}
