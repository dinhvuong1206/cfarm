<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
	/**
	 *customerInsertOrder
	 *
	 * Insert an order for customer into DB
	 * @param $cart ($product_id, $farmer_id, $product_id, $quantity)
	 *        $customer_id: customer to be inserted for
	 * @return array of products in its categories 
	 */

	public function customerInsertOrder($customer_id, $cart)
	{
		return 0;
	}

}