<?php 



$reqDT = array(
	'Banani' => __( 'Banani', 'cmb2' ),
	'Dhanmond'   => __( 'Dhanmond', 'cmb2' ),
	'Gulshan'   => __( 'Gulshan', 'cmb2' ),
	'Mirpur'   => __( 'Mirpur', 'cmb2' ),
	'Moghbazar'   => __( 'Moghbazar', 'cmb2' ),
	'Motijheel'   => __( 'Motijheel', 'cmb2' ),
	'Rampura'   => __( 'Rampura', 'cmb2' ),
	'Uttara'   => __( 'Uttara', 'cmb2' ),
	'Zatrabari'   => __( 'Zatrabari', 'cmb2' ),
);

function add_new_metabox(array $columns)
{
	$site_settings = get_option( 'ecap_settings' );
	$pickupAreas = $site_settings['pickupArea'];
	$formatedPickupAreas = [];
	foreach ($pickupAreas as $value) {
		$formatedPickupAreas[$value['areaName']] = $value['areaName'];
	}

	$columns[] = array(
		'id'	=> 'booking-datas',
		'title'	=> 'Booking info',
		'object_types'	=> array('bookings'),
		'fields'		=> array(
			array(
				'id'	=> 'memberId',
				'name'	=> 'Member ID',
				'type'	=> 'text',
			),
			array(
				'id'	=> 'personType',
				'name'	=> 'person Type',
				'type'	=> 'select',
				'options'          => array(
					'standard' => __( 'Signle', 'cmb2' ),
					'custom'   => __( 'Family', 'cmb2' ),
				),
			),
			array(
				'id'	=> 'companyName',
				'name'	=> 'Company Name',
				'type'	=> 'text',
			),
			array(
				'id'	=> 'phoneNumber',
				'name'	=> 'Phone Number',
				'type'	=> 'text',
			),
			array(
				'id'	=> 'email',
				'name'	=> 'Email Address',
				'type'	=> 'text',
			),
			array(
				'id'	=> 'nid',
				'name'	=> 'NID Number',
				'type'	=> 'text',
			),
			array(
				'id'	=> 'pickupArea',
				'name'	=> 'Pickup Area',
				'type'	=> 'select',
				'options'	=> $formatedPickupAreas
			),
		)
	);
	return $columns;
}


add_filter('cmb2_meta_boxes','add_new_metabox');

