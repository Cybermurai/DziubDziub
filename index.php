<?php
  $context = Timber::context();
  $context['foo'] = "aaaaaaav2";
  Timber::render('templates/global/index.twig', $context);

  include('components.php');
?>