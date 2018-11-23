<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//connection namespace du ModelUsers.php
use App\Model\Users;

class UsersController extends Controller
{
    $usersList = User::all();
    return view ('users',
		[
			'userList'=>$userList
		]	
	);

}

//Saving A New Model

// $user = new User;

// $user->name = 'John';

// $user->save();
