
<?php
/**
* Enqueue scripts by page ID.	
* 
* @return void
*/

function enqueueCustomScripts() {
	
	/*
	* This page is only accessible by mobile device
	*/
	define( 'MOBILE_FRONT_PAGE_ID' , 1938 );

	if ( is_page( MOBILE_FRONT_PAGE_ID ) ) {
        
		// js scripts
		wp_enqueue_script ( 
                  'scriptToogleCategoryFilterList' ,  
                  get_stylesheet_directory_uri() . 
            	  '/customScripts/main.js', 
            	  array() , false , true 
        	);	

		// css scripts
		wp_enqueue_style( 
            	  'styleToogleShowCategoryFilterList', 
            	  get_stylesheet_directory_uri() . 
            	  '/customScripts/style.css'
        	);
	}
}
add_action( 'wp_enqueue_scripts', 'enqueueCustomScripts' );
