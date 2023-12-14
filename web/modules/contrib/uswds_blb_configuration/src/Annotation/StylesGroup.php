<?php

namespace Drupal\uswds_blb_configuration\Annotation;

use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Defines a styles group form plugin annotation object.
 *
 * @Annotation
 */
class StylesGroup extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public string $id;

  /**
   * The title of the styles group plugin.
   *
   * @var \Drupal\Core\Annotation\Translation
   *
   * @ingroup plugin_translatable
   */
  public Translation $title;

  /**
   * An integer to determine the weight of this style group.
   *
   * @var int|null
   */
  public ?int $weight = NULL;

}
