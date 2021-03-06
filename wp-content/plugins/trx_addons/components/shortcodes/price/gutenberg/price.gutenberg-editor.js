(function(blocks, editor, i18n, element) {
	// Set up variables
	var el = element.createElement;

	// Register Block - Price
	blocks.registerBlockType(
		'trx-addons/price',
		trx_addons_apply_filters( 'trx_addons_gb_map', {
			title: i18n.__( 'Price' ),
			description: i18n.__( "Add block with prices" ),
			icon: 'admin-page',
			category: 'trx-addons-blocks',
			attributes: trx_addons_apply_filters( 'trx_addons_gb_map_get_params', trx_addons_object_merge(
				{
					type: {
						type: 'string',
						default: 'default'
					},
					columns: {
						type: 'number',
						default: 1
					},
					prices: {
						type: 'string',
						default: ''
					},
					// Reload block - hidden option
					reload: {
						type: 'string'
					}
				},
				trx_addons_gutenberg_get_param_slider(),
				trx_addons_gutenberg_get_param_title(),
				trx_addons_gutenberg_get_param_button(),
				trx_addons_gutenberg_get_param_id()
			), 'trx-addons/price' ),
			edit: function(props) {
				return trx_addons_gutenberg_block_params(
					{
						'render': true,
						'render_button': true,
						'parent': true,
						'general_params': el(
							'div', {}, trx_addons_gutenberg_add_params( trx_addons_apply_filters( 'trx_addons_gb_map_add_params', [
								// Layout
								{
									'name': 'type',
									'title': i18n.__( 'Layout' ),
									'descr': i18n.__( "Select shortcodes's layout" ),
									'type': 'select',
									'options': trx_addons_gutenberg_get_lists( TRX_ADDONS_STORAGE['gutenberg_sc_params']['sc_layouts']['sc_price'] )
								},
								// Columns
								{
									'name': 'columns',
									'title': i18n.__( 'Columns' ),
									'descr': i18n.__( "Specify the number of columns. If left empty or assigned the value '0' - auto detect by the number of items." ),
									'type': 'number',
									'min': 1,
									'max': 4
								}
							], 'trx-addons/price', props ), props )
						),
						'additional_params': el(
							'div', {},
							// Title params
							trx_addons_gutenberg_add_param_title( props, true ),
							// Slider params
							trx_addons_gutenberg_add_param_slider( props ),
							// ID, Class, CSS params
							trx_addons_gutenberg_add_param_id( props )
						)
					}, props
				);
			},
			save: function(props) {
				// Get child block values of attributes
				props.attributes.prices = trx_addons_gutenberg_get_child_attr( props );
				return el( wp.editor.InnerBlocks.Content, {} );
			},
		},
		'trx-addons/price'
	) );

	// Register block Action Item
	blocks.registerBlockType(
		'trx-addons/price-item',
		trx_addons_apply_filters( 'trx_addons_gb_map', {
			title: i18n.__( 'Price Item' ),
			description: i18n.__( "Select icon, specify price, title and/or description for each itemm" ),
			icon: 'admin-page',
			category: 'trx-addons-blocks',
			parent: ['trx-addons/price'],
			attributes: trx_addons_apply_filters( 'trx_addons_gb_map_get_params', {
				title: {
					type: 'string',
					default: i18n.__( 'One' )
				},
				subtitle: {
					type: 'string',
					default: ''
				},
				label: {
					type: 'string',
					default: ''
				},
				description: {
					type: 'string',
					default: ''
				},
				before_price: {
					type: 'string',
					default: ''
				},
				price: {
					type: 'string',
					default: ''
				},
				after_price: {
					type: 'string',
					default: ''
				},
				details: {
					type: 'string',
					default: ''
				},
				link: {
					type: 'string',
					default: ''
				},
				link_text: {
					type: 'string',
					default: ''
				},
				new_window: {
					type: 'boolean',
					default: false
				},
				icon: {
					type: 'string',
					default: ''
				},
				image: {
					type: 'number',
					default: 0
				},
				image_url: {
					type: 'string',
					default: ''
				},
				bg_image: {
					type: 'number',
					default: 0
				},
				bg_image_url: {
					type: 'string',
					default: ''
				},
				bg_color: {
					type: 'string',
					default: ''
				},
				className: {
					type: 'string',
					default: ''
				}
			}, 'trx-addons/price-item' ),
			edit: function(props) {
				return trx_addons_gutenberg_block_params(
					{
						'title': i18n.__( 'Price item' ) + (props.attributes.title ? ': ' + props.attributes.title : ''),
						'general_params': el(
							'div', {}, trx_addons_gutenberg_add_params( trx_addons_apply_filters( 'trx_addons_gb_map_add_params', [
								// Title
								{
									'name': 'title',
									'title': i18n.__( 'Title' ),
									'descr': i18n.__( "Enter title of the item" ),
									'type': 'text'
								},
								// Subtitle
								{
									'name': 'subtitle',
									'title': i18n.__( 'Subtitle' ),
									'descr': i18n.__( "Enter subtitle of the item" ),
									'type': 'text'
								},
								// Label
								{
									'name': 'label',
									'title': i18n.__( 'Label' ),
									'descr': i18n.__( "If not empty, a colored band with this text is shown at the top corner of the price block." ),
									'type': 'text'
								},
								// Description
								{
									'name': 'description',
									'title': i18n.__( 'Description' ),
									'descr': i18n.__( "Enter short description of the item" ),
									'type': 'textarea'
								},
								// Before price
								{
									'name': 'before_price',
									'title': i18n.__( 'Before price' ),
									'descr': i18n.__( "Any text before the price value" ),
									'type': 'text'
								},
								// Price
								{
									'name': 'price',
									'title': i18n.__( 'Price' ),
									'descr': i18n.__( "Price valuee" ),
									'type': 'text'
								},
								// After price
								{
									'name': 'after_price',
									'title': i18n.__( 'After price' ),
									'descr': i18n.__( "Any text after the price value" ),
									'type': 'text'
								},
								// Details
								{
									'name': 'details',
									'title': i18n.__( 'Details' ),
									'descr': i18n.__( "Price details" ),
									'type': 'text'
								},
								// Link
								{
									'name': 'link',
									'title': i18n.__( 'Link' ),
									'descr': i18n.__( "URL to link this item" ),
									'type': 'text'
								},
								// Link Text
								{
									'name': 'link_text',
									'title': i18n.__( 'Link Text' ),
									'descr': i18n.__( "Caption of the link" ),
									'type': 'text'
								},
								// Open in the new tab
								{
									'name': 'new_window',
									'title': i18n.__( 'Open in the new tab' ),
									'descr': i18n.__( "Open this link in the new browser's tab" ),
									'type': 'boolean'
								},
								// Icon
								{
									'name': 'icon',
									'title': i18n.__( 'Icon' ),
									'descr': i18n.__( "Select icon from library" ),
									'type': 'select',
									'options': trx_addons_gutenberg_get_option_icons_classes()
								},
								// Image
								{
									'name': 'image',
									'name_url': 'image_url',
									'title': i18n.__( 'Image' ),
									'descr': i18n.__( "Select or upload image or specify URL from other site to use it as icon" ),
									'type': 'image'
								},
								// Background Image
								{
									'name': 'bg_image',
									'name_url': 'bg_image_url',
									'title': i18n.__( 'Background image' ),
									'descr': i18n.__( "Select or upload image or specify URL from other site to use it as background of this item" ),
									'type': 'image'
								},
								// Background Color
								{
									'name': 'bg_color',
									'title': i18n.__( 'Background color' ),
									'descr': i18n.__( "Select custom background color of this item" ),
									'type': 'color'
								}
							], 'trx-addons/price-item', props ), props )
						)
					}, props
				);
			},
			save: function(props) {
				return el( '', null );
			}
		},
		'trx-addons/price-item'
	) );
})( window.wp.blocks, window.wp.editor, window.wp.i18n, window.wp.element );
