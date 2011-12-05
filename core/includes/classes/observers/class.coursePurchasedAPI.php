<?php
/*
* This observer class hooks/responds to the 'end-checkout-success' event.
*
* Purpose: Pass course and user registration data from Zen Cart to the LMS, 
*  			and the LMS using that data to process its internal registration
*			of the user and his/her course(s).
*/

class coursePurchasedAPI extends base {
	
	function coursePurchasedAPI()
	{
		global $zco_notifier;
		$zco_notifier->attach($this, array('NOTIFY_HEADER_START_CHECKOUT_SUCCESS'));
		
	}
	
	function update(&$callingClass, $notifier, $paramsArray)
	{
		
		  //global $db, $order;
		
		  
		  //mail("ryan@rammons.net","number of products: ".sizeof($order->products), "msg","From: admin@cosmosconsultingllc.com");
		
		  return;
		  
		/*  $products_array = array();
		  $counter = 0;
		
		  $products_query = "SELECT products_id, products_name
		                     FROM " . TABLE_ORDERS_PRODUCTS . "
		                     WHERE orders_id = :ordersID
		                     ORDER BY products_name";
		
		  $products_query = $db->bindVars($products_query, ':ordersID', $orders_id, 'integer');
		  $products = $db->Execute($products_query);
		
		  while (!$products->EOF) {
		    $notificationsArray[] = array('counter'=>$counter,
		                                  'products_id'=>$products->fields['products_id'],
		                                  'products_name'=>$products->fields['products_name']);
		    $counter++;
		    $products->MoveNext();
			
	
	
	
	
		// fill in necessary parameters to send to course-purchased api
		$username = '';		//get the user's full name
		$useremail = '';	// "   "    "    email address
		
		//set POST variables
		$url = 'http://domain.com/get-post.php';
		$fields = array(
		            'lname'=>urlencode($last_name),
		            'fname'=>urlencode($first_name),
		            'title'=>urlencode($title),
		            'company'=>urlencode($institution),
		            'age'=>urlencode($age),
		            'email'=>urlencode($email),
		            'phone'=>urlencode($phone)
		        );
		
		//url-ify the data for the POST
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string,'&');
		
		//open connection
		$ch = curl_init();
		
		//set the url, number of POST vars, POST data
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_POST,count($fields));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
		
		//execute post
		$result = curl_exec($ch);
		
		//close connection
		curl_close($ch)
		$i=0;
		foreach ($products as $product)
		{
			$i++;
			//echo $product[0]." / ";
			//$encodedCourseID = urlencode($course_id);
			//?formparts[]=a&formparts[]=b&formparts[]=c	
			//curl_setopt($curl_handle, CURLOPT_HTTPGET, "$encodedCourseID");
		}
		
		*/
		
		//$products = $_SESSION['cart']->get_products();
		/*
		$url = '/LMS/api/course-purchased.php';
		$curl_handle = curl_init();
		curl_setopt($curl_handle, CURLOPT_URL, "$url");
		curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "name=$username&email=$useremail&");
		*/
		//      $buffer = curl_exec($curl_handle);
		//    curl_close($curl_handle);
	}


}

?>