<?php
namespace App\Models;
use CodeIgniter\Model;


class Student extends Model {
    
	protected $data = [
		'A01005350' => ['name' => 'Jacob Smith', 'gpa' => 98],
		'A00994245' => ['name' => 'Harmanbir Dhillon', 'gpa' => 103],
		'A01027608' => ['name' => 'Jonthan Chiu', 'gpa' => 53]
	];

	public function find($id = null){
        if ($id == null) return;
		foreach ($this->data as $key => $value){
			if ($key == $id){
				return 'Name: ' . $value['name'] . ', GPA: ' . $value['gpa'];
			}
		}
	}

	public function findAll(int $limit = 0, int $offset = 0){
        $arr = array();
        foreach ($this->data as $key => $value){
            array_push($arr, 'Name: ' . $value['name'] . ', GPA: ' . $value['gpa']);
		}
        return $arr;
	}
}
