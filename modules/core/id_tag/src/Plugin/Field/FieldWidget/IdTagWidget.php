<?php

namespace Drupal\id_tag\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'id tag' widget.
 *
 * @FieldWidget(
 *   id = "id_tag",
 *   label = @Translation("Id Tag"),
 *   field_types = {
 *     "id_tag"
 *   }
 * )
 */
class IdTagWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {

    $element['#type'] = 'fieldset';

    $element['id'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Tag Id'),
      '#default_value' => isset($items[$delta]->id) ? $items[$delta]->id : NULL,
    ];

    $element['type'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Tag Type'),
      '#default_value' => isset($items[$delta]->type) ? $items[$delta]->type : NULL,
    ];

    $element['body_location'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Tag location'),
      '#default_value' => isset($items[$delta]->body_location) ? $items[$delta]->body_location : NULL,
    ];

    return $element;
  }

}
