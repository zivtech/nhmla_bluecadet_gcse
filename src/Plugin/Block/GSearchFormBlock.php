<?php

namespace Drupal\bluecadet_gcse\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Sub Navigation Block' Block
 *
 * @Block(
 *   id = "gcse_search_form",
 *   admin_label = @Translation("Google Custom Search Form"),
 * )
 */
class GSearchFormBlock extends BlockBase {

	/**
	 * {@inheritdoc}
	 */
	public function build() {
    $build = [];

    $build['form'] = \Drupal::formBuilder()->getForm(\Drupal\bluecadet_gcse\Form\GSearch::class);

    return $build;
	}

	/**
   * {@inheritdoc}
   */
  // protected function blockAccess(AccountInterface $account) {

  //   // By default, the block is visible.
  //   return AccessResult::forbidden();
  // }

	/**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return 0;
  }
}
