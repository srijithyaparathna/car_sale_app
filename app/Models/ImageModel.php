<?php

namespace App\Models;

use CodeIgniter\Model;

class ImageModel extends Model
{
    protected $table = 'tbl_car_images';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['car_id', 'type', 'img_url', 'status', 'created_date','youtube_url'];

    public function getLastCarId()
    {
        $lastCar = $this->db->table('tbl_cars')->select('id')->orderBy('id', 'DESC')->limit(1)->get()->getRowArray();
        return $lastCar ? $lastCar['id'] : null;
    }

    public function insert($data = null, bool $returnID = true)
    {
        $newCarId = $this->getLastCarId();
        
        if ($newCarId !== null) {
            $data['car_id'] = $newCarId;
            return parent::insert($data, $returnID);
        } else {
            return false; 
        }
    }
}
?>
