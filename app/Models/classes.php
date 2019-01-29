<? php namespace App/Models;

use CodeIgniter\Database\ConnectionInterface;

class classes
{
    protected $data = [
        'Math'       => ['id'=>'MATH4092', 'description'=>'a math class for the intellectuals'],
        'Philosophy' => ['id'=>'PHIL4083', 'description'=>'a philosphy class to OH YEA YEA'],
        'Business'   => ['id'=>'BUSA4124', 'desctiption'=>'learn to shake hands']
    ];
    
    public function find($id)
    {
        foreach($data as $entree)
        {
            if ($entree[0].$id == $id)
            {
                return $entree[0].$id;
            }
        }
    }
    
    public function findAll()
    {
        return $data;
    }
}
    