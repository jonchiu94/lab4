<?php
use CodeIgniter\Model;

class student extends Model {
	protected $data = [
		'jacob' => ['id' => 'A01005350', 'name' => 'Jacob Smith', 'gpa' => 98],
		'harman' => ['id' => 'A00994245', 'name' => 'Harmanbir Dhillon', 'gpa' => 103],
		'jono' => ['id' => 'A01027608', 'name' => 'Jonthan Chiu', 'gpa' => 53]
	];

	public function find($id){
		foreach ($data as $entry){
			if ($entry[0]["id"] == $id){
				return $entry[0];
			}
		}
	}

	public function findAll(){
		return $data;
	}
}
