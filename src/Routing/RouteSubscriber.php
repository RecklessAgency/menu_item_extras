<?php

namespace Drupal\menu_item_extras_reckless\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Drupal\menu_item_extras_reckless\Controller\MenuController;
use Symfony\Component\Routing\RouteCollection;

/**
 * Class RouteSubscriber.
 *
 * @package Drupal\menu_item_extras_reckless\Routing
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    $route = $collection->get('entity.menu.add_link_form');
    if ($route) {
      // @todo: Deprecate this after https://www.drupal.org/project/drupal/issues/2923429
      $route->setDefault('_controller', MenuController::class . '::addLink');
    }
  }

}
