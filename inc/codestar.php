<?php

if( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'ecap';

  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Site Setting',
    'menu_slug'  => 'site-setting',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'id'	=> 'sb',
    'title'  => 'Sidebar',
  ));

  // Create a section
  CSF::createSection( $prefix, array(
    'parent'	=> 'sb',
    'title'  => 'Left Sidebar',
    'fields' => array(
      // A textarea field
      array(
        'id'    => 'opt-textarea1',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),
    )
  ) );


  // Create a section
  CSF::createSection( $prefix, array(
    'parent'	=> 'sb',
    'title'  => 'Right Sidebar',
    'fields' => array(

      // A textarea field
      array(
        'id'    => 'opt-textarea',
        'type'  => 'textarea',
        'title' => 'Simple Textarea',
      ),

    )
  ) );


}