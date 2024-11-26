<?php

namespace App\Controllers;

use App\Models\InquiryModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class InquiryController extends ResourceController
{

    use ResponseTrait;
//    public function createInq()
//    {
//        $model = new InquiryModel();
//        $data = [
//            'customer_name' => $this->request->getVar('customer_name'),
//            'customer_email' => $this->request->getVar('customer_email'),
//            'customer_mobile' => $this->request->getVar('customer_mobile'),
//            'customer_message' => $this->request->getVar('customer_message'),
//            "car_id" => $this->request->getVar('car_id'),
//            'status' => 'PENDING',
//        ];
//
//        if ($model->save($data)){
//            return $this->respondCreated(['message' => 'Inquiry submitted successfully.']);
//        } else {
//            return $this->respondCreated(['message' => 'Error in inquiry submitted.']);
//        }
//    }

}