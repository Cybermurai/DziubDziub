<?php
use Timber\Timber;
class StatsComponent{
  function __construct(){
    $context = Timber::context();
    $img_path = '/wp-content/themes/dziubdziub/img/';
    $context['title_emblem_src'] = $img_path."components/stats/stats_title-eagle.svg";
    Timber::render('templates/components/views/stats.twig', $context);
  }
}


?>