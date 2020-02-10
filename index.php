add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array (
		'title' => esc_html__( 'Choose Tenant', 'text-domain' ),
		'id' => 'choose-tenant',
		'post_types' => array(
			0 => 'residential-property',
			1 => 'lease-listing',
			2 => 'property',
		),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array (
				'id' => $prefix . 'user_vdenvmressk',
				'type' => 'user',
				'name' => esc_html__( 'Choose Tenant', 'text-domain' ),
				'field_type' => 'select_advanced',
				'multiple' => true,
			),
		),
	);

	return $meta_boxes;
}
