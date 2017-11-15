<?php 
    function tml_registration_errors( $errors ) {
        if ( empty( $_POST['cimy_uef_STUDENT_ID'] ) )
    		$errors->add( 'empty_STUDENT_ID', '<strong>ERROR</strong>: Please enter your student ID.' );
    	if ( empty( $_POST['first_name'] ) )
    		$errors->add( 'empty_first_name', '<strong>ERROR</strong>: Please enter your first name.' );
    	if ( empty( $_POST['last_name'] ) )
    		$errors->add( 'empty_last_name', '<strong>ERROR</strong>: Please enter your last name.' );
		if ( empty( $_POST['cimy_uef_DATE_OF_BIRTH'] ) )
    		$errors->add( 'empty_DATE_OF_BIRTH', '<strong>ERROR</strong>: Please enter your date of birth.' );
    	if ( empty( $_POST['cimy_uef_CONTACT_NUMBER'] ) )
    		$errors->add( 'empty_CONTACT_NUMBER', '<strong>ERROR</strong>: Please enter your contact number.' );
    	if ( empty( $_POST['cimy_uef_DRIVERS_LICENSE_NO'] ) )
    		$errors->add( 'empty_DRIVERS_LICENSE_NO', '<strong>ERROR</strong>: Please enter your driver\'s license.' );
    	return $errors;
    }
    
    add_filter( 'registration_errors', 'tml_registration_errors' );
    
    function tml_user_register( $user_id ) {
        if ( !empty( $_POST['cimy_uef_STUDENT_ID'] ) )
    		update_user_meta( $user_id, 'cimy_uef_STUDENT_ID', $_POST['cimy_uef_STUDENT_ID'] );
    	if ( !empty( $_POST['first_name'] ) )
    		update_user_meta( $user_id, 'first_name', $_POST['first_name'] );
    	if ( !empty( $_POST['last_name'] ) )
    		update_user_meta( $user_id, 'last_name', $_POST['last_name'] );
	    if ( !empty( $_POST['cimy_uef_DATE_OF_BIRTH'] ) )
    		update_user_meta( $user_id, 'cimy_uef_DATE_OF_BIRTH', $_POST['cimy_uef_DATE_OF_BIRTH'] );
    	if ( !empty( $_POST['cimy_uef_CONTACT_NUMBER'] ) )
    		update_user_meta( $user_id, 'cimy_uef_CONTACT_NUMBER', $_POST['cimy_uef_CONTACT_NUMBER'] );
        if ( !empty( $_POST['cimy_uef_DRIVERS_LICENSE_NO'] ) )
    		update_user_meta( $user_id, 'cimy_uef_DRIVERS_LICENSE_NO', $_POST['cimy_uef_DRIVERS_LICENSE_NO'] );
    }
    
    add_action( 'user_register', 'tml_user_register' );
?>