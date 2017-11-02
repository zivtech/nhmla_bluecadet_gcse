<?php

namespace Drupal\bluecadet_gcse\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;

class GCSESearch extends ControllerBase {

  public function searchDisplay($search_term = '', Request $request) {
    $build = [];
    $build['#attached']['library'][] = 'bluecadet_gcse/gcse';

    // $build['form'] = \Drupal::formBuilder()->getForm(\Drupal\gcse\Form\GSearch::class);

    $build['search'] = [
      '#theme' => 'gcse_page',
    ];



    return $build;
  }
}