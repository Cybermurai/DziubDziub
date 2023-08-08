<?php
  $context = Timber::context();
  Timber::render('templates/global/index.twig', $context);

  include('components.php');
?>