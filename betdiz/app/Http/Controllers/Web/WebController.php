<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class WebController extends Controller
{
 	public function gerar(){
 		User::create(array(
 			'name' => 'admin',
	        'email' => 'admin@admin.com',
	        'password' => (Hash::make('password')),
	        'type_user' => 1,
	        'number_phone' => '(00) 0 0000-0000',
	        'pix' => 'admin@admin.com',
	        'category' => 1,
	        'limit' => 250.00,
 		));
 	}
}