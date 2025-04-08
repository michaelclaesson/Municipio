<?php

namespace Municipio\Customizer\Sections\Module;

use Municipio\Customizer\KirkiField;

class ColoredCards {
  public function __construct(string $sectionID) 
  {
    KirkiField::addField([
      'type'        => 'checkbox_switch',
      'settings'    => 'colored_cards_allow_custom_colors',
      'label'       => esc_html__('Custom colors', 'municipio'),
      'description' => esc_html__('If custom colors should be allowed', 'municipio'),
      'section'     => $sectionID,
      'default'     => false,
      'priority'    => 10,
    ]);

    KirkiField::addField([
      'type'          => 'repeater',
      'settings'      => 'colored_cards_colors',
      'label'         => esc_html__('Colors', 'municipio'),
      'button_label'  => esc_html__('Add new color', 'municipio'),
      'row_label'     => esc_html__('Color', 'municipio'),
      'section'       => $sectionID,
      'priority'      => 10,
      'default'       => [],
      'fields'        => [
        'color'         => [
          'type'          => 'color',
          'label'         => esc_html__('Color setting', 'muncipio'),
          'default'       => '#000000',
        ],
      ]
    ]);
  }
}
