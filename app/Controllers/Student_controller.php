<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use App\Models\Student;

class Student_controller extends Controller {
    use ResponseTrait;
    
	public function index(){
        $student = new Student();
        $res = $student->findAll();
        $data = array();
        $data["list"] = "";
        foreach($res as $cur){
            $data["list"] .= $cur . "</br>";
        }
        return view('student', $data);
	}

	public function show($id){
        $student = new Student();
        return $student->find($id);
    }

    public function new(){
        return $this->fail('Not implemented', 418);
    }
    
    public function edit($id){
        return $this->fail('Not implemented', 418);
    }
}
