<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class student extends Controller
{
	public function index()
	{
		return view('student');
	}

	public function show(){
        return view('student');
    }

}
