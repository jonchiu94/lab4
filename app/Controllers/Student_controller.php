<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;

class Student_controller extends Controller {
    use ResponseTrait;
    
	public function index(){
        return view('student');
	}

	public function show($id){
        $student = new Student();
        return $student->find($id);
        //return view('student');
    }

    public function new(){
        return $this->fail('Not implemented', 418);
    }
    
    public function edit($id){
        return $this->fail('Not implemented', 418);
    }
}
