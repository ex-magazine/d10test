<?php

namespace Drupal\uswds_ckeditor_integration\Plugin\Filter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Logger\LoggerChannelTrait;
use Drupal\Core\Messenger\MessengerTrait;
use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Filter to apply USWDS Sortable attributes.
 *
 * @Filter(
 *   id = "filter_uswds_table_sortable",
 *   title = @Translation("USWDS Sortable Table Attributes CK5"),
 *   description = @Translation("Apply USWD table sortable attributes. With CKEditor5 in mind."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_REVERSIBLE,
 * )
 */
class FilterUswdsTableSortable extends FilterBase {

  use LoggerChannelTrait;
  use MessengerTrait;

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode): FilterProcessResult {
    $result = new FilterProcessResult($text);

    if (stristr($text, 'table') !== FALSE) {
      $dom = Html::load($text);
      $xpath = new \DOMXPath($dom);
      $tables = $xpath->query('//table[contains(@class, "usa-table--sortable")]');

      $captions = $xpath->query('//table//caption');

      if ($captions->count() === 0) {
        $message = $this->t('Table using uswds sortable does not have a caption, which is required for accessiblity');
        $this->getLogger('uswds_ckeditor_integration')->error($message);
        $this->messenger()->addError($message);
      }

      // Add USWDS Class to table.
      foreach ($tables as $table) {
        $rows = $xpath->query('.//tr', $table);
        $headers = $xpath->query('//thead//th', $rows->item(0));

        // Add attributes to column headers.
        foreach ($headers as $header) {
          $header->setAttribute('scope', 'col');
          $header->setAttribute('role', 'columnheader');
          $header->setAttribute('data-sortable', TRUE);
        }

        $skip_first = TRUE;
        foreach ($rows as $row) {
          if ($skip_first) {
            $skip_first = FALSE;
            continue;
          }
          $tbodyTags = $xpath->query('//tbody//td|//th', $row);
          foreach ($tbodyTags as $tag) {
            if ($tag->nodeName === 'th') {
              $tag->setAttribute('scope', 'row');
              $tag->setAttribute('role', 'rowheader');
            }
            else {
              $tag->setAttribute('data-sort-value', $tag->nodeValue);
            }
          }
        }

        // Ensure an aria-live region exists after the table.
        $liveRegion = $dom->createElement('div');
        $liveRegion->setAttribute('aria-live', 'polite');
        $liveRegion->setAttribute('class', 'usa-sr-only usa-table__announcement-region');

        $container = $dom->createElement('div');
        $container->setAttribute('class', 'usa-table-container--scrollable');
        $container->setAttribute('tabindex', 0);

        $table_clone = $container->cloneNode();
        $table->parentNode->replaceChild($table_clone, $table);
        $table_clone->appendChild($table);
        $table_clone->appendChild($liveRegion);
      }

      $result->setProcessedText(Html::serialize($dom));
    }
    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function tips($long = FALSE) {
    return $this->t('Filter to convert usa-table-stacked into responsive markup.');
  }

}
