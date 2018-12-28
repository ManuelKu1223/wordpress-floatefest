<?php

namespace App;

use Sober\Controller\Controller;
use WP_Query;

class FrontPage extends Controller
{

  public function heroBackground() {
    $background_id = get_field('home_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function ticketsBackground() {
    $background_id = get_field('tickets_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function scheduleBackground() {
    $background_id = get_field('schedule_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function floatingBackground() {
    $background_id = get_field('floating_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function campingBackground() {
    $background_id = get_field('camping_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function glampingBackground() {
    $background_id = get_field('glamping_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function rvBackground() {
    $background_id = get_field('rv_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function vipBackground() {
    $background_id = get_field('vip_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function frigidBackground() {
    $background_id = get_field('frigid_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function parkingBackground() {
    $background_id = get_field('parking_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function directionsBackground() {
    $background_id = get_field('directions_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function concertBackground() {
    $background_id = get_field('concert_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function vendorsBackground() {
    $background_id = get_field('vendors_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function volunteersBackground() {
    $background_id = get_field('volunteers_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function healthBackground() {
    $background_id = get_field('health_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function sponsorsBackground() {
    $background_id = get_field('sponsors_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function videosBackground() {
    $background_id = get_field('videos_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function photosBackground() {
    $background_id = get_field('photos_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }

  public function mapsBackground() {
    $background_id = get_field('maps_background', 'options');
    return wp_get_attachment_image_src($background_id, 'full')[0];
  }
}
