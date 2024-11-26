<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table = 'tbl_sub_category';
    protected $primaryKey = 'id';
    protected $allowedFields = ['model_name', 'status', 'main_category_id', 'created_date'];

    // Function to get sub-categories along with main category name
    // public function getSubCategoriesWithMainCategory()
    // {
    //     return $this->select('tbl_sub_category.*, tbl_main_category.category_name')
    //         ->join('tbl_main_category', 'tbl_sub_category.main_category_id = tbl_main_category.id')
    //         ->findAll();
    // }
    public function deleteByMainCategoryId($mainCategoryId)
    {
        return $this->where('main_category_id', $mainCategoryId)->delete();
    }
}