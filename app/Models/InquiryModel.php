<?php

namespace App\Models;

use CodeIgniter\Model;

class InquiryModel extends Model
{
    protected $table = 'tbl_inquiries';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'customer_email', 'customer_mobile', 'customer_message', 'car_id', 'status', 'created_date'];

}