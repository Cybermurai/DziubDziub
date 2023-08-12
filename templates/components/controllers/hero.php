<?php
use Timber\Timber;
class HeroComponent{
  function __construct(){
    $context = Timber::context();
    $context['title'] = "Hero component";

    $img_path = '/wp-content/themes/dziubdziub/img/';

    $context['eagle_src'] = $img_path."components/hero/hero_eagle.png";
    $context['eagle_emblem_src'] = $img_path."components/hero/hero_title-eagle.svg";
    $context['socials'] = [
      'fb' => $img_path.'icons/fb.svg',
      'instagram' => $img_path.'icons/instagram.svg'
    ];

    Timber::render('templates/components/views/hero.twig', $context);
  }
}
?>
