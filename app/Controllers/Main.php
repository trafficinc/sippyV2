<?php

namespace App\Controllers;

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\User;

class Main extends BaseController {

	public function home() {

	    $data['today'] = date("Y-m-d");
        $this->view('home',$data);
	}

}