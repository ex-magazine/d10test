<?php

namespace Drupal\uswds_blb_configuration\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\uswds_blb_configuration\LayoutOptionInterface;

/**
 * Defines the layout option entity class.
 *
 * @ConfigEntityType(
 *   id = "uswds_layout_option",
 *   label = @Translation("USWDS Layout Builder Layout option"),
 *   label_collection = @Translation("USWDS Layout Builder Layout Options"),
 *   label_plural = @Translation("USWDS Layout Builder Layout Option"),
 *   handlers = {
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider"
 *     },
 *     "form" = {
 *       "default" = "Drupal\uswds_blb_configuration\Form\LayoutOptionForm",
 *       "add" = "Drupal\uswds_blb_configuration\Form\LayoutOptionForm",
 *       "edit" = "Drupal\uswds_blb_configuration\Form\LayoutOptionForm",
 *       "delete" = "Drupal\uswds_blb_configuration\Form\LayoutOptionDeleteForm"
 *     },
 *   },
 *   config_prefix = "layout_option",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "layout_id" = "layout_id",
 *     "label" = "label",
 *     "structure" = "structure",
 *     "default_breakpoints" = "default_breakpoints",
 *     "breakpoints" = "breakpoints",
 *     "weight" = "weight",
 *   },
 *   config_export = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "layout_id" = "layout_id",
 *     "label" = "label",
 *     "structure" = "structure",
 *     "default_breakpoints" = "default_breakpoints",
 *     "breakpoints" = "breakpoints",
 *     "weight" = "weight",
 *   },
 *   links = {
 *     "delete-form" = "/admin/config/uswds-layout-builder/layouts/options/{uswds_layout_option}/delete",
 *     "edit-form" = "/admin/config/uswds-layout-builder/layouts/options/{uswds_layout_option}/edit",
 *     "add-form" = "/admin/config/uswds-layout-builder/layouts/{uswds_layout}/options/add"
 *   },
 * )
 */
class LayoutOption extends ConfigEntityBase implements LayoutOptionInterface {

  /**
   * The machine name for the configuration entity.
   *
   * @var string
   */
  protected string $id;

  /**
   * The human-readable name of the configuration entity.
   *
   * @var string
   */
  protected $label;

  /**
   * The layout id.
   *
   * @var string
   */
  protected $layout_id;

  /**
   * The structure of option columns.
   *
   * @var string
   */
  protected $structure;

  /**
   * The enabled breakpoints for this option.
   *
   * @var array
   */
  protected $breakpoints;

  /**
   * The enabled default breakpoints for this option.
   *
   * @var array
   */
  protected $default_breakpoints;

  /**
   * Order of options on the config page & Layout Builder add/update forms.
   *
   * @var int
   */
  protected int $weight = 0;

  /**
   * {@inheritdoc}
   */
  public function getLayoutId() {
    return $this->layout_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setLayoutId($layout_id) {
    $this->layout_id = $layout_id;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getStructure() {
    return $this->structure;
  }

  /**
   * {@inheritdoc}
   */
  public function setStructure($structure) {
    $this->structure = $structure;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getStructureId() {
    return 'blb_col_' . str_replace(' ', '_', $this->structure);
  }

  /**
   * {@inheritdoc}
   */
  public function getWeight() {
    return $this->weight;
  }

  /**
   * {@inheritdoc}
   */
  public function setWeight($weight) {
    $this->weight = $weight;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setBreakpoints($breakpoints) {
    $this->breakpoints = $breakpoints;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function getBreakpointsIds() {
    $ids = [];
    if ($this->breakpoints) {
      foreach ($this->breakpoints as $key => $value) {
        if ($value) {
          $ids[] = $key;
        }
      }
    }
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
  public function getBreakpointsLabels() {
    $labels = [];
    foreach ($this->breakpoints as $breakpoint_id) {
      $breakpoint = $this->entityTypeManager()->getStorage('uswds_breakpoint')->load($breakpoint_id);
      if ($breakpoint) {
        $labels[] = $breakpoint->label();
      }
    }
    return $labels;
  }

  /**
   * {@inheritdoc}
   */
  public function getLayout() {
    $layout = $this->entityTypeManager()->getStorage('uswds_layout')->load($this->layout_id);
    return $layout;
  }

  /**
   * {@inheritdoc}
   */
  public function getLayoutById($layout_id) {
    $layout = $this->entityTypeManager()->getStorage('uswds_layout')->load($layout_id);
    return $layout;
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultBreakpointsIds() {
    $ids = [];
    if ($this->default_breakpoints) {
      foreach ($this->default_breakpoints as $key => $value) {
        if ($value) {
          $ids[] = $key;
        }
      }
    }
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
  public function getDefaultBreakpointsLabels() {
    $labels = [];
    if ($this->default_breakpoints) {
      foreach ($this->default_breakpoints as $breakpoint_id) {
        $breakpoint = $this->entityTypeManager()->getStorage('uswds_breakpoint')->load($breakpoint_id);
        if ($breakpoint) {
          $labels[] = $breakpoint->label();
        }
      }
    }
    return $labels;
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(EntityStorageInterface $storage, $update = TRUE) {
    parent::postSave($storage, $update);
    foreach ($this->getLayout()->getLayoutOptions() as $layoutOption) {
      if ($layoutOption->getOriginalId() !== $this->getOriginalId()) {
        if (array_intersect($this->getDefaultBreakpointsIds(), $layoutOption->getDefaultBreakpointsIds())) {
          $breakpoints = $this->entityTypeManager()->getStorage('uswds_breakpoint')->loadMultiple(
            array_diff($layoutOption->getDefaultBreakpointsIds(), $this->getDefaultBreakpointsIds())
          );
          $layoutOption->default_breakpoints = array_map(function ($breakpoint) {
            return $breakpoint->id();
          }, $breakpoints);
          $layoutOption->save();
        }
      }
    }
  }

}
