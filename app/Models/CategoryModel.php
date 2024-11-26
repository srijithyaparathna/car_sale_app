<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'tbl_main_category';
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name', 'status', 'created_date', 'image_url'];

    public function getCategoriesWithSubcategories()
    {
        $builder = $this->db->table($this->table);
        $builder->select('tbl_main_category.*, tbl_sub_category.id as sub_category_id, tbl_sub_category.model_name, tbl_sub_category.status as sub_status, tbl_sub_category.created_date as sub_created_date');
        $builder->join('tbl_sub_category', 'tbl_main_category.id = tbl_sub_category.main_category_id', 'left');
        $query = $builder->get();
        return $query->getResultArray();
    }
}
