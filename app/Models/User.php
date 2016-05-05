<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

use Session;
use DB;
use Request;
use Validator;
use Hash;

class User extends Eloquent {	

	public function get_categories($count=null)
	{
		global $wpdb;
		$categoryTable = $wpdb->terms; 
		$categoryQuery = "SELECT * FROM $categoryTable";
		$categories = $wpdb->get_results($categoryQuery);
		return $categories;
	}
}
?>