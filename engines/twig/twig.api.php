<?php

/**
 * @file
 * API documentation for the twig engine, part of tfd7.
 */

/**
 * Customize the twig environment after initialisation.
 *
 * @param \Twig_Environment $environment
 *   The initialized twig environment.
 */
function hook_twig_init_alter(Twig_Environment $environment) {
  $loader = $environment->getLoader();
  $loaders = array($loader);
  $loaders[] = (new Twig_Loader_Filesystem())
    ->setPaths(array(DRUPAL_ROOT . '/../custom_path'), 'namespace');
  $chain = new Twig_Loader_Chain($loaders);
  $environment->setLoader($chain);
}
