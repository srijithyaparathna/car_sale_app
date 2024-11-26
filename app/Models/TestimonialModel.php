<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimonialModel extends Model
{
    protected $table = 'tbl_testimonials';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','customer_name', 'customer_address', 'title', 'description', 'img_url', 'status', 'created_at'];
}