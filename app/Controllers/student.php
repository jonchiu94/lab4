<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;

class student extends Controller
{
    use ResponseTrait;
	public function index(){
        return view('student');
	}

	public function show(){
        return view('student');
    }
    
    public function find($id){
        $this->load->model('student');
        echo $this->student->find($id);
    }
    
    public function new(){
        return $this->fail('Not implemented',418);
    }
    
    public function edit($id){
        return $this->fail('Not implemented',418);
    }

}
