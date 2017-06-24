<?php

// include 'index.php';

use Illuminate\Database\Capsule\Manager as Capsule;
//class myCap extends Illuminate\Database\Capsule\Manager {}

// Create the User model
class User extends Illuminate\Database\Eloquent\Model {
    //public $timestamps = false;
}

// Grab a user with an id of 1
$user = User::find(1);

// echo '<pre>';
// print_r($user);
// echo '</pre>';

echo $user->username;
echo $user->email;


$users = Capsule::table('users')->where('email', '=', 'test@aol.com')->get();
pretty($users);

//generate random users
// $user = new User;
// $user->username = substr(md5(microtime()),rand(0,26),5);
// $user->email = substr(md5(microtime()),rand(0,26),5) . '@aol.com';
// $user->save();