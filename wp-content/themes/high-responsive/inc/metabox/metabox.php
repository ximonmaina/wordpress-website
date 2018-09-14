<?php
/**
 * The template for displaying meta box in page/post
 *
 * This adds Select Sidebar, Header Featured Image Options, Single Page/Post Image Layout
 * This is only for the design purpose and not used to save any content
 *
 * @package High_Responsive
 */



/**
 * Class to Renders and save metabox options
 *
 * @since High Responsive 1.0
 */
class Highresponsive_Metabox {
	private $meta_box;

	private $fields;

	/**
	* Constructor
	*
	* @since High Responsive 1.0
	*
	* @access public
	*
	*/
	public function __construct( $meta_box_id, $meta_box_title, $post_type ) {

		$this->meta_box = array (
							'id' 		=> $meta_box_id,
							'title' 	=> $meta_box_title,
							'post_type' => $post_type,
							);

		$this->fields = array(
			'highresponsive-header-image',
			//'highresponsive-sidebar-option',
			//'highresponsive-featured-image',
		);


		// Add metaboxes
		add_action( 'add_meta_boxes', array( $this, 'add' ) );

		add_action( 'save_post', array( $this, 'save' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_metabox_scripts' ) );
   	}

	/**
	* Add Meta Box for multiple post types.
	*
	* @since High Responsive 1.0
	*
	* @access public
	*/
	public function add($postType) {
		if( in_array( $postType, $this->meta_box['post_type'] ) ) {
			add_meta_box( $this->meta_box['id'], $this->meta_box['title'], array( $this, 'show' ), $postType );
		}
	}

	/**
	* Renders metabox
	*
	* @since High Responsive 1.0
	*
	* @access public
	*/
	public function show() {
		global $post;

		$sidebar_options = array(
			'default-sidebar'        => esc_html__( 'Default Sidebar', 'high-responsive' ),
			'optional-sidebar-one'   => esc_html__( 'Optional Sidebar One', 'high-responsive' ),
			'optional-sidebar-two'   => esc_html__( 'Optional Sidebar Two', 'high-responsive' ),
			'optional-sidebar-three' => esc_html__( 'Optional Sidebar three', 'high-responsive' ),
		);

		$header_image_options 	= array(
			'default' => esc_html__( 'Default', 'high-responsive' ),
			'enable'  => esc_html__( 'Enable', 'high-responsive' ),
			'disable' => esc_html__( 'Disable', 'high-responsive' ),
		);
		//$featured_image_options	= Highresponsive_Metabox_featured_image_options();


	    // Use nonce for verification
	    wp_nonce_field( basename( __FILE__ ), 'highresponsive_custom_meta_box_nonce' );

	    // Begin the field table and loop  ?>
	    <div id="highresponsive-ui-tabs" class="ui-tabs">
		    <ul class="highresponsive-ui-tabs-nav" id="highresponsive-ui-tabs-nav">
		    	<!-- <li><a href="#frag2"><?php esc_html_e( 'Select Sidebar', 'high-responsive' ); ?></a></li> -->
		    	<li><a href="#frag3"><?php esc_html_e( 'Header Featured Image Options', 'high-responsive' ); ?></a></li>
		    	<!-- <li><a href="#frag4"><?php esc_html_e( 'Single Page/Post Image Layout ', 'high-responsive' ); ?></a></li> -->
		    </ul>

		    <?php /*
		    <div id="frag2" class="catch_ad_tabhead">
		    	<table id="sidebar-metabox" class="form-table" width="100%">
		            <tbody>
		                <tr>
		                    <?php
		                     $metasidebar = get_post_meta( $post->ID, 'highresponsive-sidebar-option', true );

	                        if ( empty( $metasidebar ) ){
	                            $metasidebar = 'default-sidebar';
	                        }

		                    foreach ( $sidebar_options as $field => $label ) {
		                    ?>
		                        <td style="vertical-align: top;">
		                            <label class="description">
		                                <input type="radio" name="highresponsive-sidebar-option" value="<?php echo esc_attr( $field ); ?>" <?php checked( $field, $metasidebar ); ?>/>&nbsp;&nbsp;<?php echo esc_html( $label ); ?>
		                            </label>
		                        </td>

		                    <?php
		                    } // end foreach
		                    ?>
		                </tr>
		            </tbody>
		        </table>
		    </div>
		    */ ?>

	    	<div id="frag3" class="catch_ad_tabhead">
		    	<table id="header-image-metabox" class="form-table" width="100%">
		            <tbody>
		                <tr>
		                    <?php
		                    $metaheader = get_post_meta( $post->ID, 'highresponsive-header-image', true );

	                        if ( empty( $metaheader ) ){
	                            $metaheader = 'default';
	                        }

		                    foreach ( $header_image_options as $field => $label ) {
		                    ?>
		                        <td style="width: 100px;">
		                            <label class="description">
		                                <input type="radio" name="highresponsive-header-image" value="<?php echo esc_attr( $field ); ?>" <?php checked( $field, $metaheader ); ?>/>&nbsp;&nbsp;<?php echo esc_html( $label ); ?>
		                            </label>
		                        </td>

		                    <?php
		                    } // end foreach
		                    ?>
		                </tr>
		            </tbody>
		        </table>
		    </div>

		    <?php /* <div id="frag4" class="catch_ad_tabhead">
		    	<table id="featured-image-metabox" class="form-table" width="100%">
		            <tbody>
		                <tr>
		                    <select name="highresponsive-featured-image" id="custom_element_grid_class">
			                     <?php
				                    foreach ( $featured_image_options as $field ) {
				                        $metalayout = get_post_meta( $post->ID, 'highresponsive-featured-image', true );
				                        if( empty( $metaimage ) ){
				                            $metaimage='default';
				                        }
				                   	?>
				                   		<option value="<?php echo esc_attr( $field ); ?>" <?php selected( $metalayout, $field ); ?>><?php echo esc_html( $label ); ?></option>
			    					<?php
			    					} // end foreach
			                    ?>
			                </select>
		                </tr>
		            </tbody>
		        </table>
		    </div> */ ?>
		</div>
	<?php
	}

	/**
	 * Save custom metabox data
	 *
	 * @action save_post
	 *
	 * @since High Responsive 1.0
	 *
	 * @access public
	 */
	public function save( $post_id ) {
		global $post_type;

		$post_type_object = get_post_type_object( $post_type );

	    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )                      // Check Autosave
	    || ( ! isset( $_POST['post_ID'] ) || $post_id != $_POST['post_ID'] )        // Check Revision
	    || ( ! in_array( $post_type, $this->meta_box['post_type'] ) )                  // Check if current post type is supported.
	    || ( ! check_admin_referer( basename( __FILE__ ), 'highresponsive_custom_meta_box_nonce') )    // Check nonce - Security
	    || ( ! current_user_can( $post_type_object->cap->edit_post, $post_id ) ) )  // Check permission
	    {
	      return $post_id;
	    }

	    foreach ( $this->fields as $field ) {
			$new = $_POST[ $field ];

			delete_post_meta( $post_id, $field );

			if ( '' == $new || array() == $new ) {
				return;
			} else {
				if ( ! update_post_meta ( $post_id, $field, sanitize_key( $new ) ) ) {
					add_post_meta( $post_id, $field, sanitize_key( $new ), true );
				}
			}
		} // end foreach
	}

	public function enqueue_metabox_scripts( $hook ) {
		$allowed_pages = array( 'post-new.php', 'post.php' );

		// Bail if not on required page
		if ( ! in_array( $hook, $allowed_pages ) ) {
			return;
		}

	    //Scripts
		wp_enqueue_script( 'highresponsive-metabox-script', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'inc/metabox/metabox.js', array( 'jquery', 'jquery-ui-tabs' ), '2017-08-15' );

		//CSS Styles
		wp_enqueue_style( 'highresponsive-metabox-style', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'inc/metabox/metabox.css' );
	}
}

$Highresponsive_Metabox = new Highresponsive_Metabox(
	'highresponsive-options', 					//metabox id
	esc_html__( 'High Responsive Options', 'high-responsive' ), //metabox title
	array( 'page', 'post' )				//metabox post types
);
