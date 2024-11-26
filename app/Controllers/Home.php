<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ImageModel;
use App\Models\TestimonialModel;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index(): string
    {
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->findAll();

        $db = \Config\Database::connect();

        // Query for latest 18 Passenger vehicles
        $sqlPassenger = "SELECT 
                        c.id AS car_id,
                        c.*,
                        JSON_ARRAYAGG(
                            JSON_OBJECT(
                                'image_id', ci.id,
                                'image_type', ci.type,
                                'img_url', ci.img_url,
                                'image_status', ci.status,
                                'image_created_date', ci.created_date
                            )
                        ) AS images
                    FROM 
                        tbl_cars c
                    LEFT JOIN 
                        tbl_car_images ci ON c.id = ci.car_id
                    WHERE 
                        c.ad_status = 'published' AND 
                        c.main_vehicle_type = 'Passenger'
                    GROUP BY 
                        c.id
                    ORDER BY 
                        c.created_date DESC
                    LIMIT 18";

        $queryPassenger = $db->query($sqlPassenger);
        $passengerCars = $queryPassenger->getResultArray();

        // Query for latest 18 Commercial vehicles
        $sqlCommercial = "SELECT 
                        c.id AS car_id,
                        c.*,
                        JSON_ARRAYAGG(
                            JSON_OBJECT(
                                'image_id', ci.id,
                                'image_type', ci.type,
                                'img_url', ci.img_url,
                                'image_status', ci.status,
                                'image_created_date', ci.created_date
                            )
                        ) AS images
                    FROM 
                        tbl_cars c
                    LEFT JOIN 
                        tbl_car_images ci ON c.id = ci.car_id
                    WHERE 
                        c.ad_status = 'published' AND 
                        c.main_vehicle_type = 'Commercial'
                    GROUP BY 
                        c.id
                    ORDER BY 
                        c.created_date DESC
                    LIMIT 18";

        $queryCommercial = $db->query($sqlCommercial);
        $commercialCars = $queryCommercial->getResultArray();

        // Query for latest 18 Commercial vehicles
        $sqlAll = "SELECT 
                        c.id AS car_id,
                        c.*,
                        JSON_ARRAYAGG(
                            JSON_OBJECT(
                                'image_id', ci.id,
                                'image_type', ci.type,
                                'img_url', ci.img_url,
                                'image_status', ci.status,
                                'image_created_date', ci.created_date
                            )
                        ) AS images
                    FROM 
                        tbl_cars c
                    LEFT JOIN 
                        tbl_car_images ci ON c.id = ci.car_id
                    WHERE 
                        c.ad_status = 'published'
                    GROUP BY 
                        c.id
                    ORDER BY 
                        c.created_date DESC
                    LIMIT 18";

        $queryAll = $db->query($sqlAll);
        $allCars = $queryAll->getResultArray();

        // Decode features and images JSON
        foreach ($passengerCars as &$car) {
            $car['features'] = json_decode($car['features'], true) ?? [];
        }

        foreach ($commercialCars as &$car) {
            $car['features'] = json_decode($car['features'], true) ?? [];
        }

        foreach ($allCars as &$car) {
            $car['features'] = json_decode($car['features'], true) ?? [];
        }

        // Get additional categories data
        $categoriesData = $this->getCategoryData1(); // Fetch categories1 data

        $testimonialModel = new TestimonialModel();
        $testimonials = $testimonialModel->findAll();

        $data = [
            'passengerCars' => $passengerCars,
            'commercialCars' => $commercialCars,
            'allCars' => $allCars,
            'categories' => $categories,
            'categories1' => $categoriesData['categories1'], // Pass categories1 separately
            'testimonials' => $testimonials
        ];

        return view('home', $data);
    }


    public function show($id = null)
    {
        $carModel = new \App\Models\CarModel();

        // Retrieve car details
        $car = $carModel->find($id);

        // Check if car exists
        if (!$car) {
            return $this->failNotFound('Car not found');
        }

        // Retrieve car images
        $imageModel = new \App\Models\ImageModel(); // Ensure correct namespace
        $images = $imageModel->where('car_id', $id)->findAll();

        // Get the count of images
        $imageCount = count($images);

        // Return image count as JSON
        return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON([
            'imageCount' => $imageCount
        ]);
    }




     // Private method to fetch and prepare category data
    private function getCategoryData1()
    {
        // Load the car model
        $category = new CategoryModel();
        $results = $category->getCategoriesWithSubcategories();

        $data['categories'] = [];

        foreach ($results as $result) {
            $mainCategoryId = $result['id'];

            if (!isset($data['categories'][$mainCategoryId])) {
                $data['categories'][$mainCategoryId] = [
                    'id' => $result['id'],
                    'category_name' => $result['category_name'],
                    'status' => $result['status'],
                    'created_date' => $result['created_date'],
                    'sub_categories' => []
                ];
            }

            if ($result['sub_category_id']) {
                $data['categories'][$mainCategoryId]['sub_categories'][] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'status' => $result['sub_status'],
                    'main_category_id' => $result['id'],
                    'created_date' => $result['sub_created_date']
                ];
            }
        }

        $data['categories1'] = array_values($data['categories']);
        return $data;
    }






}

