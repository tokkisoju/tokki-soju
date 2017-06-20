<?php
/**
 * acf-setup.php
 */

// return if this is dev environment
if ( WP_ENV === 'development' ) {
  return;
}

// hide field group menu from users
if ( wp_get_current_user()->user_login !== 'sean' ) {
  define( 'ACF_LITE' , true );
}

/*
ACF field groups
 */
// export field export code here:
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
  'key' => 'group_5920752df41bd',
  'title' => 'Home Page Fields',
  'fields' => array (
    array (
      'key' => 'field_5920753c27efe',
      'label' => 'Home Sections',
      'name' => 'home_sections',
      'type' => 'flexible_content',
      'instructions' => 'Add home sections by clicking "Add Section" below.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'button_label' => 'Add Section',
      'min' => 1,
      'max' => '',
      'layouts' => array (
        array (
          'key' => '5931bbbce92b6',
          'name' => 'large_image_section',
          'label' => 'Large Image Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5931bbbce92b7',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59321f82b251d',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_5931bbcae92bd',
              'label' => 'Section Image',
              'name' => 'section_image',
              'type' => 'image',
              'instructions' => 'Upload a large image to display in the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => '',
              'min_height' => '',
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '592075503041c',
          'name' => 'map_section',
          'label' => 'Map Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_592842506e7ae',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287c21c3c40',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_59284337afbf9',
              'label' => 'Map Locations',
              'name' => '',
              'type' => 'message',
              'instructions' => '',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => 'Map locations are added by clicking <em>Locations > Add New</em> on the left-hand side of the dashboard.',
              'new_lines' => 'wpautop',
              'esc_html' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '59287d6cc3c46',
          'name' => 'video_section',
          'label' => 'Video Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_59287d6cc3c47',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287d6cc3c48',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_59287d80c3c4a',
              'label' => 'Section Video',
              'name' => 'section_video',
              'type' => 'oembed',
              'instructions' => 'Copy-and-paste a link to the video (on YouTube or Vimeo).',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'width' => '',
              'height' => '',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5943fb7948440',
          'name' => 'faqs_section',
          'label' => 'FAQs Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5943fb7948441',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_5943fb7948442',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_5943fb8948444',
              'label' => 'FAQs',
              'name' => 'faqs',
              'type' => 'repeater',
              'instructions' => 'Add FAQs by clicking "Add FAQ" below.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 1,
              'max' => 0,
              'layout' => 'row',
              'button_label' => 'Add FAQ',
              'sub_fields' => array (
                array (
                  'key' => 'field_5943fbb448445',
                  'label' => 'Question',
                  'name' => 'question',
                  'type' => 'text',
                  'instructions' => 'Enter the text of the question.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'prepend' => '',
                  'append' => '',
                  'maxlength' => '',
                ),
                array (
                  'key' => 'field_5943fbca48446',
                  'label' => 'Answer',
                  'name' => 'answer',
                  'type' => 'textarea',
                  'instructions' => 'Enter the text of the answer.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                  'maxlength' => '',
                  'rows' => 5,
                  'new_lines' => 'br',
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '592843136e7b4',
          'name' => 'press_section',
          'label' => 'Press Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_592843136e7b5',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287c96c3c43',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_5928809d38a71',
              'label' => 'Press Items',
              'name' => 'press_items',
              'type' => 'repeater',
              'instructions' => 'Add press items by clicking "Add Item" below.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'collapsed' => '',
              'min' => 3,
              'max' => 9,
              'layout' => 'row',
              'button_label' => 'Add Item',
              'sub_fields' => array (
                array (
                  'key' => 'field_592880e338a72',
                  'label' => 'Company Logo',
                  'name' => 'company_logo',
                  'type' => 'image',
                  'instructions' => 'Upload the company\'s logo.',
                  'required' => 1,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'return_format' => 'array',
                  'preview_size' => 'thumbnail',
                  'library' => 'all',
                  'min_width' => 200,
                  'min_height' => 100,
                  'min_size' => '',
                  'max_width' => '',
                  'max_height' => '',
                  'max_size' => '',
                  'mime_types' => 'gif,png,svg,webp',
                ),
                array (
                  'key' => 'field_5928813938a73',
                  'label' => 'Press URL',
                  'name' => 'press_url',
                  'type' => 'url',
                  'instructions' => 'Copy-and-paste the URL for the press write-up.',
                  'required' => 0,
                  'conditional_logic' => 0,
                  'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                  ),
                  'default_value' => '',
                  'placeholder' => '',
                ),
              ),
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5928431c6e7b6',
          'name' => 'about_section',
          'label' => 'About Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5928431c6e7b7',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287ca6c3c44',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_592851fd0cae6',
              'label' => 'Section Photo',
              'name' => 'section_photo',
              'type' => 'image',
              'instructions' => 'Upload a photo to use in the section.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'return_format' => 'array',
              'preview_size' => 'thumbnail',
              'library' => 'all',
              'min_width' => 300,
              'min_height' => 600,
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => 'gif,jpg,jpeg,webp',
            ),
            array (
              'key' => 'field_59284b135306a',
              'label' => 'Section Headline',
              'name' => 'section_headline',
              'type' => 'text',
              'instructions' => 'Enter a headline to appear above the section text.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59284b2f5306b',
              'label' => 'Section Text',
              'name' => 'section_text',
              'type' => 'wysiwyg',
              'instructions' => 'Add the section text here.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'tabs' => 'all',
              'toolbar' => 'basic',
              'media_upload' => 0,
              'delay' => 0,
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '5928430c6e7b2',
          'name' => 'recipe_section',
          'label' => 'Recipe Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_5928430c6e7b3',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287c70c3c42',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_5928494cc9b20',
              'label' => 'Recipes',
              'name' => 'recipes',
              'type' => 'relationship',
              'instructions' => 'Select recipes to appear as tiles in the recipe section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'post_type' => array (
                0 => 'recipe',
              ),
              'taxonomy' => array (
              ),
              'filters' => array (
                0 => 'search',
              ),
              'elements' => array (
                0 => 'featured_image',
              ),
              'min' => 3,
              'max' => 9,
              'return_format' => 'object',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
        array (
          'key' => '592861a70c5c4',
          'name' => 'gallery_section',
          'label' => 'Gallery Section',
          'display' => 'block',
          'sub_fields' => array (
            array (
              'key' => 'field_592861a70c5c5',
              'label' => 'Section Title',
              'name' => 'section_title',
              'type' => 'text',
              'instructions' => 'Enter a title for the section.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'default_value' => '',
              'placeholder' => '',
              'prepend' => '',
              'append' => '',
              'maxlength' => '',
            ),
            array (
              'key' => 'field_59287cbcc3c45',
              'label' => 'Show Title?',
              'name' => 'show_title',
              'type' => 'true_false',
              'instructions' => 'Check this box if you\'d like to show the section\'s title.',
              'required' => 0,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'message' => '',
              'default_value' => 1,
              'ui' => 0,
              'ui_on_text' => '',
              'ui_off_text' => '',
            ),
            array (
              'key' => 'field_592861bf0c5c9',
              'label' => 'Photo Gallery',
              'name' => 'photo_gallery',
              'type' => 'gallery',
              'instructions' => 'Upload photos by clicking "Add to gallery" below.',
              'required' => 1,
              'conditional_logic' => 0,
              'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
              ),
              'min' => 2,
              'max' => '',
              'insert' => 'append',
              'library' => 'all',
              'min_width' => 750,
              'min_height' => 500,
              'min_size' => '',
              'max_width' => '',
              'max_height' => '',
              'max_size' => '',
              'mime_types' => 'gif,jpg,jpeg,webp',
            ),
          ),
          'min' => '',
          'max' => '',
        ),
      ),
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/home-page.php',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_5920800733c36',
  'title' => 'Location Fields',
  'fields' => array (
    array (
      'key' => 'field_59284ff3f95d5',
      'label' => 'Location Address',
      'name' => 'location_address',
      'type' => 'google_map',
      'instructions' => 'Enter the location\'s address.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'center_lat' => '',
      'center_lng' => '',
      'zoom' => '',
      'height' => 275,
    ),
    array (
      'key' => 'field_59487079f41c5',
      'label' => 'Location Type',
      'name' => 'location_type',
      'type' => 'radio',
      'instructions' => 'Select the type of location this is.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        'restaurant' => 'Restaurant',
        'store' => 'Store',
      ),
      'allow_null' => 0,
      'other_choice' => 0,
      'save_other_choice' => 0,
      'default_value' => '',
      'layout' => 'vertical',
      'return_format' => 'value',
    ),
    array (
      'key' => 'field_592867514bad4',
      'label' => 'Website URL',
      'name' => 'website_url',
      'type' => 'url',
      'instructions' => 'Enter the location\'s website URL.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
    ),
    array (
      'key' => 'field_592867794bad5',
      'label' => 'Phone Number',
      'name' => 'phone_number',
      'type' => 'text',
      'instructions' => 'Enter the location\'s phone number.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_59284f08af048',
      'label' => 'Location Price',
      'name' => 'location_price',
      'type' => 'select',
      'instructions' => 'Select the location price.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array (
        1 => '$',
        2 => '$$',
        3 => '$$$',
        4 => '$$$$',
      ),
      'default_value' => array (
      ),
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'ajax' => 0,
      'return_format' => 'label',
      'placeholder' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'location',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array (
    0 => 'the_content',
  ),
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_59285300052d6',
  'title' => 'Options Page Fields',
  'fields' => array (
    array (
      'key' => 'field_59285314155ab',
      'label' => 'Brand Logo',
      'name' => 'brand_logo',
      'type' => 'image',
      'instructions' => 'Upload the brand\'s logo here.',
      'required' => 1,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'return_format' => 'array',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'min_width' => 475,
      'min_height' => 285,
      'min_size' => '',
      'max_width' => '',
      'max_height' => '',
      'max_size' => '',
      'mime_types' => 'gif,png,svg,webp',
    ),
    array (
      'key' => 'field_594409c92ebc1',
      'label' => 'Facebook URL',
      'name' => 'facebook_url',
      'type' => 'text',
      'instructions' => 'Enter the business\'s Facebook page URL.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_594409fc2ebc2',
      'label' => 'Twitter URL',
      'name' => 'twitter_url',
      'type' => 'text',
      'instructions' => 'Enter the business\'s Twitter page URL.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
    array (
      'key' => 'field_59440a072ebc3',
      'label' => 'Instagram URL',
      'name' => 'instagram_url',
      'type' => 'text',
      'instructions' => 'Enter the business\'s Instagram page URL.',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'options_page',
        'operator' => '==',
        'value' => 'acf-options',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'normal',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

acf_add_local_field_group(array (
  'key' => 'group_59284c82c1c86',
  'title' => 'Recipe Fields',
  'fields' => array (
    array (
      'key' => 'field_59284cf56f8fb',
      'label' => 'Drink Photo',
      'name' => '',
      'type' => 'message',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array (
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => 'Use the featured image field on the right-hand side of the page to add a photo of the drink.',
      'new_lines' => 'wpautop',
      'esc_html' => 0,
    ),
  ),
  'location' => array (
    array (
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'recipe',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'acf_after_title',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => 1,
  'description' => '',
));

endif;