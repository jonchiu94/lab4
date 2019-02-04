<? php 
    
namespace App/Models;
use CodeIgniter\Model;

class class extends Model
{
    protected $data = [
        'Math'       => ['id'=>'MATH4092', 'description'=>'a math class for the intellectuals'],
        'Philosophy' => ['id'=>'PHIL4083', 'description'=>'a philosphy class to OH YEA YEA'],
        'Business'   => ['id'=>'BUSA4124', 'desctiption'=>'learn to shake hands']
    ];
    
    public function find($id = null)
    {
        if ($id == null)
        {
            return;
        }
        
        foreach($this -> $data as $key => $entree)
        {
            if ($key == $id)
            {
                return 'Id: ' . $value['id'] . ', Description: ' . $value['description'];
            }
        }
    }
    
    public function findAll(int $limit = 0, int $offset = 0)
    {
        $arr = array();
        foreach ($this->data as $key => $value){
            array_push($arr, 'Id: ' . $value['id'] . ', Description: ' . $value['description']);
		}
        return $arr;
    }
}
    