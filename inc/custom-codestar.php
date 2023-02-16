<?php

if( class_exists( 'CSF' ) ) {

   // Set a unique slug-like ID
   $prefix = 'ecap_settings';

   // Create options
   CSF::createOptions( $prefix, array(
      'menu_title' => 'Site Setting',
      'menu_slug'  => 'site-setting',
   ));



   CSF::createSection( $prefix, array(
     'title'  => 'Overview',
     'icon'   => 'fas fa-rocket',
     'fields' => array(

       //
       // A text field
       //
       array(
         'id'    => 'opt-text',
         'type'  => 'text',
         'title' => 'Text',
       ),

       array(
         'id'    => 'opt-textarea',
         'type'  => 'textarea',
         'title' => 'Textarea',
         'help'  => 'The help text of the field.',
       ),

       array(
         'id'    => 'opt-upload',
         'type'  => 'upload',
         'title' => 'Upload',
       ),

       array(
         'id'    => 'opt-switcher',
         'type'  => 'switcher',
         'title' => 'Switcher',
         'label' => 'The label text of the switcher.',
       ),

       array(
         'id'      => 'opt-color',
         'type'    => 'color',
         'title'   => 'Color',
         'default' => '#3498db',
       ),

       array(
         'id'    => 'opt-checkbox',
         'type'  => 'checkbox',
         'title' => 'Checkbox',
         'label' => 'The label text of the checkbox.',
       ),

       array(
         'id'      => 'opt-radio',
         'type'    => 'radio',
         'title'   => 'Radio',
         'options' => array(
           'yes'   => 'Yes, Please.',
           'no'    => 'No, Thank you.',
         ),
         'default' => 'yes',
       ),

       array(
         'id'          => 'opt-select',
         'type'        => 'select',
         'title'       => 'Select',
         'placeholder' => 'Select an option',
         'options'     => array(
           'opt-1'     => 'Option 1',
           'opt-2'     => 'Option 2',
           'opt-3'     => 'Option 3',
         ),
       ),

       array(
         'id'      => 'opt-image-select',
         'type'    => 'image_select',
         'title'   => 'Image Select',
         'options' => array(
           'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
           'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
           'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
           'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
           'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
         ),
         'default' => 'opt-1',
       ),

       array(
         'id'    => 'opt-background',
         'type'  => 'background',
         'title' => 'Background',
       ),

       array(
         'type'    => 'notice',
         'style'   => 'success',
         'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
       ),

       array(
         'id'    => 'opt-icon',
         'type'  => 'icon',
         'title' => 'Icon',
       ),

       array(
         'id'    => 'opt-alt-text',
         'type'  => 'text',
         'title' => 'Text',
       ),

       array(
         'id'         => 'opt-alt-textarea',
         'type'       => 'textarea',
         'title'      => 'Textarea',
         'subtitle'   => 'A textarea with shortcoder.',
         'shortcoder' => 'csf_demo_shortcodes',
       ),

     )
   ));


   /**
    * Left sidebar option
    * */
   CSF::createSection( $prefix, array(
      'id'          => 'leftsidebar',
      'title'       => 'Left Sidebar',
      'icon'        => 'far fa-square',
   ));

   CSF::createSection( $prefix, array(
      'parent'       => 'leftsidebar',
      'title'        => 'Support',
      'description'  => 'Support section in left sidebar ',
      'icon'         => 'far fa-square',
      'fields'       => array(
         array(
            'id'    => 'support_it_incharge_name',
            'title' => 'IT Incharge Name',
            'type'  => 'text',
            'placeholder'  => 'Ex: Mr. XYZ'
         ),
         array(
            'id'    => 'support_it_incharge_phone',
            'title' => 'IT Incharge Phone',
            'type'  => 'text',
            'placeholder'  => 'Ex: 01755559888'
         ),
         array(
            'id'    => 'support_event_incharge_name',
            'title' => 'Event Incharge Name',
            'type'  => 'text',
            'placeholder'  => 'Ex: Mr. Arnob'
         ),
         array(
            'id'    => 'support_event_incharge_phone',
            'title' => 'Event Incharge Phone',
            'type'  => 'text',
            'placeholder'  => 'Ex:  017555596888'
         ),
         array(
            'id'    => 'support_gift_incharge_name',
            'title' => 'Gift Incharge Name',
            'type'  => 'text',
            'placeholder'  => 'Ex: Mr. Hasan'
         ),
         array(
            'id'    => 'support_gift_incharge_phone',
            'title' => 'Gift Incharge Phone',
            'type'  => 'text',
            'placeholder'  => 'Ex: 017555596888'
         ),
         array(
            'id'    => 'support_food_incharge_name',
            'title' => 'Food Incharge Name',
            'type'  => 'text',
            'placeholder'  => 'Ex: Mr. Rakib'
         ),
         array(
            'id'    => 'support_food_incharge_phone',
            'title' => 'Food Incharge Phone',
            'type'  => 'text',
            'placeholder'  => 'Ex: 01234556678'
         ),
      )
   ));

   CSF::createSection($prefix, array(
      'parent' => 'leftsidebar',
      'title'  => 'Organized by',
      'description'  => 'Organization info',
      'icon'   => 'far fa-square',
      'fields' => array(
         array(
            'id'    => 'organization_name',
            'title' => 'Organizations Name',
            'type'  => 'text',
            'placeholder'  => 'Ex: eCab LTD'
         ),
         array(
            'id'    => 'organization_phone',
            'title' => 'Organizations Phone Number',
            'type'  => 'text',
            'placeholder'  => 'Ex: 01844-696009'
         ),
         array(
            'id'    => 'organization_email',
            'title' => 'Organizations Email Address',
            'type'  => 'text',
            'placeholder'  => 'Ex: info@e-cab.net'
         ),
         array(
            'id'    => 'organization_address',
            'title' => 'Organizations Address',
            'type'  => 'textarea',
            'placeholder'  => 'Ex: House: 04, Road:23/a, Block: B, Banani, Dhaka 1213 Dhaka, Dhaka Division, Bangladesh'
         ),
      )
   ));
   
   CSF::createSection($prefix, array(
      'parent' => 'leftsidebar',
      'title'  => 'Standing Committee Members',
      'icon'   => 'far fa-square',
      'fields' => array(
         array(
           'id'     => 'committee_members',
           'type'   => 'repeater',
           'title'  => 'Members',
           'button_title'  => 'Add New',
           'fields' => array(
               array(
                  'id'    => 'member_avatar',
                  'type'  => 'media',
                  'title' => 'Member Avatar'
               ),
               array(
                  'id'    => 'member_name',
                  'type'  => 'text',
                  'title' => 'Member Name'
               ),
            ),
         ),
      )
   ));



   CSF::createSection( $prefix, array(
      'id'          => 'rightsidebar',
      'title'       => 'Right Sidebar',
      'icon'        => 'far fa-square',
      'fields'      => array()
   ));


   CSF::createSection($prefix, array(
      'parent'  => 'rightsidebar',
      'title'  => 'Platinum Sponsored',
      'description'  => 'Set Platinum Sponsored logs',
      'fields'   => [
         [
            'title' => 'Logos',
            'id'     => 'platinum_sponsored',
            'type'   => 'repeater',
            'button_title' => 'Add New',
            'fields' => [
               [
                  'id'    => 'logo',
                  'type'  => 'media',
                  'title' => 'Member Avatar'
               ]
            ]
         ]
      ]
   ));


   CSF::createSection($prefix, array(
      'parent'  => 'rightsidebar',
      'title'  => 'Gold Sponsored',
      'description'  => 'Set Gold Sponsored logs',
      'fields'   => [
         [
            'title' => 'Logos',
            'id'     => 'gold_sponsored',
            'type'   => 'repeater',
            'button_title' => 'Add New',
            'fields' => [
               [
                  'id'    => 'logo',
                  'type'  => 'media',
                  'title' => 'Member Avatar'
               ]
            ]
         ]
      ]
   ));

   CSF::createSection($prefix, array(
      'parent'  => 'rightsidebar',
      'title'  => 'Silver Sponsored',
      'description'  => 'Set Silver Sponsored logs',
      'fields'   => [
         [
            'title' => 'Logos',
            'id'     => 'silver_sponsored',
            'type'   => 'repeater',
            'button_title' => 'Add New',
            'fields' => [
               [
                  'id'    => 'logo',
                  'type'  => 'media',
                  'title' => 'Member Avatar'
               ]
            ]
         ]
      ]
   ));


   CSF::createSection($prefix, array(
      'parent'  => 'rightsidebar',
      'title'  => 'Partners',
      'description'  => 'Set Partners logs',
      'fields'   => [
         [
            'title' => 'Logos',
            'id'     => 'partners_logos',
            'type'   => 'repeater',
            'button_title' => 'Add New',
            'fields' => [
               [
                  'id'    => 'logo',
                  'type'  => 'media',
                  'title' => 'Member Avatar'
               ]
            ]
         ]
      ]
   ));

}