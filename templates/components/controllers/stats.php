<?php
class StatsComponent{
  function __construct(){
    $context = Timber::context();
    $context['title'] = "Stats component";
    Timber::render('templates/components/views/stats.twig', $context);
  }
}


?>