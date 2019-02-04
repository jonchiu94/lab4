<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use App\Models\classes;
class Class_controller extends Controller {
    use ResponseTrait;
    
	public function index(){
        $class = new Class();
        $res = $class->findAll();
        $data = array();
        $data["list"] = "";
        foreach($res as $cur){
            $data["list"] .= $cur . "</br>";
        }
        return view('class', $data);
	}
	public function show($id){
        $class = new Class();
        return $class->find($id);
    }
    public function new(){
        return $this->fail('Not implemented', 418);
    }
    
    public function edit($id){
        return $this->fail('Not implemented', 418);
    }
}