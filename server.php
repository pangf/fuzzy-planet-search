<?php	
	
	// Receive the Data from Client
	$data = $_REQUEST;
	$name = $data['planet_name'];
	
	// Result Array
	$result = array();
	
	// Data Array
	$planet_details = array( 
		array( 'name' => 'Mercury' , 'order_no' => '1' , 'no_of_days_in_year' => '87' ),
		array( 'name' => 'Venus' , 'order_no' => '2' , 'no_of_days_in_year' => '224' ),
		array( 'name' => 'Earth' , 'order_no' => '3' , 'no_of_days_in_year' => '365' ),
		array( 'name' => 'Mars' , 'order_no' => '4' , 'no_of_days_in_year' => '686' ),
		array( 'name' => 'Jupiter' , 'order_no' => '5' , 'no_of_days_in_year' => '4332' ),
		array( 'name' => 'Saturn' , 'order_no' => '6' , 'no_of_days_in_year' => '10755' ),
		array( 'name' => 'Uranus' , 'order_no' => '7' , 'no_of_days_in_year' => '30687' ),
		array( 'name' => 'Neptune' , 'order_no' => '8' , 'no_of_days_in_year' => '60190' )
	);
	
	for( $count = 0 ; $count < count( $planet_details ) ; $count++ ) {
		if( stripos( $planet_details[$count]['name'] , $name ) !== false ) {
			array_push( $result , $planet_details[$count] );
		}
	}
	
	// Return Response as JSON
	echo json_encode( $result );
	
?>