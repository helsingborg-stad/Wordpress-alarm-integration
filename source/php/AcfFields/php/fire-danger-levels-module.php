<?php

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_647492a20e7e4',
        'title' => 'Fire Danger Levels',
        'fields' => array(
            array(
                'key' => 'field_647492a243ff9',
                'label' => 'Api URL',
                'name' => 'api_url',
                'aria-label' => '',
                'type' => 'url',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'mod-fire-danger-leve',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'left',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
        'acfe_display_title' => 'Fire Danger Levels',
        'acfe_autosync' => array(
            0 => 'json',
        ),
        'acfe_form' => 0,
        'acfe_meta' => '',
        'acfe_note' => '',
    ));

endif;
