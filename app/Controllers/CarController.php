<?php

namespace App\Controllers;

use App\Models\CarModel;
use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use App\Models\InquiryModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\Database\Exceptions\DatabaseException;


use App\Models\ImageModel;
use CodeIgniter\HTTP\ResponseInterface;

class CarController extends ResourceController
{
    protected $modelName = 'App\Models\CarModel';
    protected $format = 'json';
    protected $session;
    protected $email;

    public function __construct()
    {
        $this->model = new $this->modelName();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }

    // get all cars
    public function index($page = 1)
    {
        $db = \Config\Database::connect();

        // Get filter parameters from query string
        $title = $this->request->getGet('title');
        $minPrice = $this->request->getGet('min-value');
        $maxPrice = $this->request->getGet('max-value');
        $condition = $this->request->getGet('condition');
        $type = $this->request->getGet('type');
        $maincategory = $this->request->getGet('main-category');
        $model = $this->request->getGet('sub-category');
        $fuelType = $this->request->getGet('fuel-type');
        $transmission = $this->request->getGet('transmission');
        $year = $this->request->getGet('year');
        $yearFrom = $this->request->getGet('year-from');  // New parameter for year-from
        $yearTo = $this->request->getGet('year-to');      // New parameter for year-to
        $driver_type = $this->request->getGet('driver_type');
        $mileage = $this->request->getGet('mileage');
        $color = $this->request->getGet('color');
        $engineSize = $this->request->getGet('engine-size');
        $mainVehicleType = $this->request->getGet('main-vehicle-type');
        $subVehicleType = $this->request->getGet('sub-vehicle-type');

        $currentPage = $page;
        $itemsPerPage = 12; // Number of items per page

        $sql = "SELECT 
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
                WHERE 1=1 and c.ad_status = 'published'";

        // Add conditions based on filters for car listing
        if ($title) $sql .= " AND c.title LIKE '%" . $db->escapeString($title) . "%'";
        if ($minPrice) $sql .= " AND c.sale_price >= " . intval($minPrice);
        if ($maxPrice) $sql .= " AND c.sale_price <= " . intval($maxPrice);
        if ($condition) $sql .= " AND c.condition = '" . $db->escapeString($condition) . "'";
        if ($type) $sql .= " AND c.type = '" . $db->escapeString($type) . "'";
        if ($maincategory) $sql .= " AND c.main_category_id = '" . $db->escapeString($maincategory) . "'";
        if ($model) $sql .= " AND c.sub_category_id = '" . $db->escapeString($model) . "'";
        if ($fuelType) $sql .= " AND c.fuel_type = '" . $db->escapeString($fuelType) . "'";
        if ($transmission) $sql .= " AND c.transmission = '" . $db->escapeString($transmission) . "'";
        if ($year) $sql .= " AND c.year = " . intval($year);


          // Handle year range filters for total count
    if ($yearFrom) $sql .= " AND c.year >= " . intval($yearFrom);
    if ($yearTo) $sql .= " AND c.year <= " . intval($yearTo);


        if ($driver_type) $sql .= " AND c.driver_type = '" . $db->escapeString($driver_type) . "'";
        if ($mileage) $sql .= " AND c.mileage <= " . intval($mileage);
        if ($color) $sql .= " AND c.color = '" . $db->escapeString($color) . "'";
        if ($engineSize) $sql .= " AND c.engine_size = '" . $db->escapeString($engineSize) . "'";
        if ($mainVehicleType) $sql .= " AND c.main_vehicle_type = '" . $db->escapeString($mainVehicleType) . "'";
        if ($subVehicleType) $sql .= " AND c.sub_vehicle_type = '" . $db->escapeString($subVehicleType) . "'";

        $sql .= " GROUP BY c.id";

        // Total cars count for pagination
        // Get total cars count for pagination
        $totalCarsSql = "SELECT COUNT(DISTINCT c.id) as total
                            FROM tbl_cars c
                            LEFT JOIN tbl_car_images ci ON c.id = ci.car_id
                            WHERE 1=1 AND c.ad_status = 'published'";

        // Add conditions for total count
        if ($title) $totalCarsSql .= " AND c.title LIKE '%" . $db->escapeString($title) . "%'";
        if ($minPrice) $totalCarsSql .= " AND c.sale_price >= " . intval($minPrice);
        if ($maxPrice) $totalCarsSql .= " AND c.sale_price <= " . intval($maxPrice);
        if ($condition) $totalCarsSql .= " AND c.condition = '" . $db->escapeString($condition) . "'";
        if ($type) $totalCarsSql .= " AND c.type = '" . $db->escapeString($type) . "'";
        if ($maincategory) $totalCarsSql .= " AND c.main_category_id = '" . $db->escapeString($maincategory) . "'";
        if ($model) $totalCarsSql .= " AND c.sub_category_id = '" . $db->escapeString($model) . "'";
        if ($fuelType) $totalCarsSql .= " AND c.fuel_type = '" . $db->escapeString($fuelType) . "'";
        if ($transmission) $totalCarsSql .= " AND c.transmission = '" . $db->escapeString($transmission) . "'";
        if ($year) $totalCarsSql .= " AND c.year = " . intval($year);
        if ($yearFrom) $totalCarsSql .= " AND c.year >= " . intval($yearFrom);
        if ($yearTo) $totalCarsSql .= " AND c.year <= " . intval($yearTo);
        if ($driver_type) $totalCarsSql .= " AND c.driver_type = '" . $db->escapeString($driver_type) . "'";
        if ($mileage) $totalCarsSql .= " AND c.mileage <= " . intval($mileage);
        if ($color) $totalCarsSql .= " AND c.color = '" . $db->escapeString($color) . "'";
        if ($engineSize) $totalCarsSql .= " AND c.engine_size = '" . $db->escapeString($engineSize) . "'";
        if ($mainVehicleType) $totalCarsSql .= " AND c.main_vehicle_type = '" . $db->escapeString($mainVehicleType) . "'";
        if ($subVehicleType) $totalCarsSql .= " AND c.sub_vehicle_type = '" . $db->escapeString($subVehicleType) . "'";

        // Debugging: Output the total cars SQL for review
        // Uncomment the line below to see the SQL query for debugging purposes
        // echo $totalCarsSql; exit;

        $totalCarsQuery = $db->query($totalCarsSql);
        $totalCars = $totalCarsQuery->getRow()->total;

        // Check if totalCars is null or not a number, and set it to 0 if needed
        $totalCars = is_numeric($totalCars) ? $totalCars : 0;

        // Pagination and fetching the cars
        $offset = ($currentPage - 1) * $itemsPerPage;
        $sql .= " ORDER BY c.id DESC LIMIT $itemsPerPage OFFSET $offset;";

        $start = $offset + 1;
        $end = min($offset + $itemsPerPage, $totalCars);

        // Execute the main car query
        $query = $db->query($sql);
        $cars = $query->getResultArray();

        // Decode features and images JSON
        foreach ($cars as &$car) {
            $car['features'] = json_decode($car['features'], true) ?? [];
            $car['images'] = json_decode($car['images'], true) ?? [];
        }

        $data = [
            'start' => $start,
            'end' => $end,
            'cars' => $cars,
            'request' => $this->request,
            'currentPage' => $currentPage,
            'itemsPerPage' => $itemsPerPage,
            'totalCars' => $totalCars,
            'totalPages' => ceil($totalCars / $itemsPerPage),
            'offset' => $offset
        ];
        //  echo json_encode($data);
        return view('carList', $data);
    }




    // get all cars with out feacture
    public function index_()
    {
        // Load the car model
        $carModel = new CarModel();

        // Fetch the cars data
        $data['cars'] = $carModel->findAll();

        // Pass the data to the view
        // return $this->respond($data);
        return view('carList', $data);
    }


    public function store()
    {
        $model = new CarModel();

        // Collect data from the request
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'type' => $this->request->getVar('type'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',

        ];

        log_message('info', 'Received data: ' . json_encode($data));

        if ($model->save($data)) {
            return $this->respondCreated(['message' => 'Car added successfully']);
        } else {
            log_message('error', 'Error adding car: ' . json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }
    }

    private function formatFeatures($features)
    {
        // Convert stdClass to array if necessary
        if (is_object($features)) {
            $features = (array) $features;
        }

        $formattedFeatures = [];
        $availableFeatures = [
            'A/C: Front',
            'A/C: Rear',
            'Backup Camera',
            'Cruise Control',
            'Navigation',
            'Power Locks',
            'AM/FM Stereo',
            'CD Player',
            'DVD System',
            'MP3 Player',
            'Portable Audio',
            'Premium Audio',
            'Airbag: Driver',
            'Airbag: Passenger',
            'Antilock Brakes',
            'Bluetooth',
            'Hands-Free',
            'Fog Lights',
            'Power Windows',
            'Windows Defroster',
            'Rear Window',
            'Wiper Tinted Glass',
            'Sunroof',
            'Tow Package',
            'Bucket Seats',
            'Heated Seats',
            'Leather Interior',
            'Memory Seats',
            'Power Seats',
            'Third Row Seats'
        ];

        foreach ($availableFeatures as $feature) {
            $formattedFeatures[$feature] = isset($features[$feature]) ? "true" : "false";
        }

        return $formattedFeatures;
    }

    // Get a specific car
    public function show($id = null)
    {
        // Retrieve car details
        $car = $this->model->find($id);

        // Check if car exists
        if (!$car) {
            return $this->failNotFound('Car not found');
        }

        // Retrieve car images
        $imageModel = new ImageModel();
        $images = $imageModel->where('car_id', $id)->findAll();

        $maincategory = new CategoryModel();
        $maincategory = $maincategory->where('id', $car['main_category_id'])->first();

        $subCategory = new SubCategoryModel();
        $subCategory = $subCategory->where('id', $car['sub_category_id'])->first();

        // Decode features
        $car['features'] = json_decode($car['features'], true);

        // process images into separate fields with numeric keys

        $indexedImages = [];

        foreach ($images as $index => $image) {
            if ($image['type'] === 'image') {
                $indexedImages[$index + 1] = $image['img_url'];
            }
        }

        // Retrieve category data
        // Find YouTube URL from images
        $youtubeUrl = null;
        foreach ($images as $image) {
            if ($image['type'] === 'YouTube_URL') {
                $youtubeUrl = $image['img_url'];
                break; // We assume there's only one YouTube URL
            }
        }



        // Combine car details and images with the imageindex
        $data = [
            'car' => $car,
            'images' => $images,
            'indexedImages' => $indexedImages,
            'maincategory' => $maincategory,
            'subCategory' => $subCategory,
            'youtubeUrl' => $youtubeUrl, // Pass the YouTube URL

        ];

        // Return response with status code
        if (empty($images)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)->setJSON([
                'message' => 'No images found for the car',
                'car' => $car
            ]);
        }

        // return $this->response->setStatusCode(ResponseInterface::HTTP_OK)->setJSON($response);
        //

        // return $this->respond($data);
        return view('listingDatails', $data);
        // return view('getOnecar_example', ['car' => $car]);


    }


    public function update($id = null)
    {
        $car = $this->model->find($id);
        if (!$car) {
            return $this->failNotFound('Car not found');
        }

        // Collect data from the request
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'type' => $this->request->getVar('type'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'metakeywords' => $this->request->getVar('metakeywords'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',
        ];

        // Filter out empty values
        $data = array_filter($data, fn ($value) => !is_null($value) && $value !== '');

        log_message('info', 'Received data for update: ' . json_encode($data));

        // Validate the data before updating
        if (empty($data)) {
            return $this->failValidationError('No valid data provided for update.');
        }

        // Attempt to update the car record
        if ($this->model->update($id, $data)) {
            return $this->respond(['message' => 'Car updated successfully']);
        } else {
            log_message('error', 'Error updating car: ' . json_encode($this->model->errors()));
            return $this->failValidationErrors($this->model->errors());
        }
    }


    // Delete a car
    public function delete($id = null)
    {
        $car = $this->model->find($id);

        if (!$car) {
            return $this->failNotFound('Car not found');
        }

        if ($this->model->delete($id)) {
            return $this->respond(['message' => 'Car deleted successfully']);
        } else {
            log_message('error', 'Error deleting car: ' . json_encode($this->model->errors()));
            return $this->failServerError('Failed to delete the car');
        }
    }
    // Private method to fetch and prepare category data
    private function getCategoryData()
    {
        // Load the car model
        $category = new CategoryModel();
        $carModel = new CarModel();
        $results = $category->getCategoriesWithSubcategories();

        $data['categories'] = [];

        foreach ($results as $result) {
            $mainCategoryId = $result['id'];

            $mainVehicleCount = $carModel->where('main_category_id', $mainCategoryId)
                ->where('ad_status', 'published')
                ->countAllResults();  // This method will count the results


            if (!isset($data['categories'][$mainCategoryId])) {
                $data['categories'][$mainCategoryId] = [
                    'id' => $result['id'],
                    'category_name' => $result['category_name'],
                    'status' => $result['status'],
                    'created_date' => $result['created_date'],
                    'main_category_count' => $mainVehicleCount,
                    'sub_categories' => []
                ];
            }

            if ($result['sub_category_id']) {
                $subCategoryId = $result['sub_category_id'];

                $subVehicleCount = $carModel->where('sub_category_id', $subCategoryId)
                    ->where('ad_status', 'published')
                    ->countAllResults();  // This method will count the results


                $data['categories'][$mainCategoryId]['sub_categories'][] = [
                    'id' => $result['sub_category_id'],
                    'model_name' => $result['model_name'],
                    'status' => $result['sub_status'],
                    'main_category_id' => $result['id'],
                    'created_date' => $result['sub_created_date'],
                    'sub_category_count' => $subVehicleCount
                ];
            }
        }

        $data['categories'] = array_values($data['categories']);
        return $data;
    }

    public function view_add_car()
    {
        // Use the session service initialized in BaseController
        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Debugging information
            echo "Session User: " . print_r($this->session->get('user'), true) . "<br>";
            echo "Session Token: " . print_r($this->session->get('token'), true) . "<br>";
            return redirect()->to('/login');
        }
        // Fetch category data
        $data = $this->getCategoryData();

        // Pass the data to the view
        return view('addCar', $data);
    }

    public function view_add_car_2()
    
    {

        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Debugging information
            echo "Session User: " . print_r($this->session->get('user'), true) . "<br>";
            echo "Session Token: " . print_r($this->session->get('token'), true) . "<br>";
            return redirect()->to('/login');
        }
        // Fetch category data
        $data = $this->getCategoryData();

        // Pass the data to the view
        return view('addCar2', $data);
    }


    public function view_car_list()
    {
        // Fetch category data
        $data = $this->getCategoryData();

        // Return data as JSON
        return $this->response->setJSON($data);
    }

    public function filterCars()
    {
        $carModel = new CarModel();


        // Collect filter parameters from GET request
        $filters = [
            'condition' => $this->request->getGet('condition'),
            'type' => $this->request->getGet('type'),
            'transmission' => $this->request->getGet('transmission'),
            'driver_type' => $this->request->getGet('driver_type'),
            'fuel_type' => $this->request->getGet('fuel_type'),
            'color' => $this->request->getGet('color'),
            'engine_size' => $this->request->getGet('engine_size'),
            'price' => $this->request->getGet('price'),
            'mileage' => $this->request->getGet('mileage'),
            'year' => $this->request->getGet('year')
        ];

        // Call the filterCars method
        $data['cars'] = $carModel->filterCars($filters);

        // Load the view and pass the filtered cars
        return view('car_filter_example', $data);
    }



    public function view_admin_car_listing_page($page = 1)
    {
        // Use the session service initialized in BaseController
        if (!$this->session->has('user') || !$this->session->has('token')) {
            return redirect()->to('/login');
        }
        $db = \Config\Database::connect();

        // Get filter parameters from query string
        $sortOrder = $this->request->getVar('sort_order') ?? 'recently-added';
        $title = $this->request->getGet('title');
        $mainVehicleType = $this->request->getGet('main_vehicle_type');

        $currentpage = $page;
        $itemsPerPage = 12;
        $offset = ($page - 1) * $itemsPerPage; // Number of items per page

        // Determine the SQL ORDER BY clause based on the sort order
        switch ($sortOrder) {
            case 'early-added':
                $orderBy = 'c.id ASC'; // Early Added (oldest first)
                break;
            case 'recently-added':
            default:
                $orderBy = 'c.id DESC'; // Recently Added (newest first)
                break;
        }

        // Query to get the total number of cars, including filter conditions
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_cars c WHERE 1=1"; // Base WHERE clause

        // Apply the main vehicle type filter if provided
        if ($mainVehicleType) {
            $totalQuery .= " AND c.main_vehicle_type = '" . $db->escapeString($mainVehicleType) . "'";
        }

        // Apply the title filter if provided
        if ($title) {
            $totalQuery .= " AND c.title LIKE '%" . $db->escapeLikeString($title) . "%'";
        }

        $totalResult = $db->query($totalQuery)->getRow();
        $totalCars = $totalResult->total;
        $totalPages = ceil($totalCars / $itemsPerPage); // Calculate total pages

        // Build the main SQL query
        $sql = "SELECT 
                c.id AS car_id,
                c.*,
                IFNULL(i.inquiry_count, 0) AS inquiry_count,
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
            LEFT JOIN (
                SELECT car_id, COUNT(*) AS inquiry_count
                FROM tbl_inquiries
                GROUP BY car_id
            ) i ON c.id = i.car_id
            WHERE 1=1"; // Start with WHERE 1=1

        // Add condition based on main vehicle type filter
        if ($mainVehicleType) {
            $sql .= " AND c.main_vehicle_type = '" . $db->escapeString($mainVehicleType) . "'";
        }

        // Add condition based on title filter
        if ($title) {
            $sql .= " AND c.title LIKE '%" . $db->escapeLikeString($title) . "%'";
        }

        // Apply sorting and pagination
        $sql .= " GROUP BY 
                c.id, i.inquiry_count
              ORDER BY 
                $orderBy
              LIMIT
                $offset, $itemsPerPage";

        // Execute the query
        $query = $db->query($sql);
        $cars = $query->getResultArray();

        // Decode features JSON
        foreach ($cars as &$car) {
            $car['features'] = json_decode($car['features'], true) ?? [];
        }

        $data['cars'] = $cars;
        $data['currentPage'] = $page;
        $data['totalPages'] = $totalPages;

        $data['request'] = $this->request->getGet();

        return view('myInventory', $data);
    }



    public function update_status()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new CarModel();
        $carId = $this->request->getVar('id');

        $car = $this->model->find($carId);
        // if (!$car) {
        //     echo "<script>
        //     alert('Not found');
        //     window.location.href = '" . base_url('admin/car_listing') . "';
        //      </script>";
        //     return;
        // }

        $data = [
            'ad_status' => $this->request->getVar('ad_status')
        ];
        if ($this->model->update($carId, $data)) {
            return "Success";
        }
        return $this->request->getVar('ad_status');

        // if ($this->model->update($carId, $data)) {
        //     echo "<script>
        //     alert('Status added!');
        //       window.location.href = '" . base_url('admin/car_listing') . "';
        //      </script>";
        //     return;
        // } else {
        //     echo "<script>
        //     alert('Error!" . json_encode($model->errors()) . "');
        //     window.location.href = '" . base_url('admin/car_listing') . "';
        // </script>";
        //     return;
        // }
        // echo "success" . $this->request->getPost('modalAdStatus');
        // $db = \Config\Database::connect();
        // $request = $this->request->getJSON();

        // $carId = $request->id ?? null;
        // $status = $request->status ?? null;

        // if (!$carId || !$status) {
        //     return $this->response->setJSON([
        //         'success' => false,
        //         'message' => 'Car ID and status are required.',
        //     ]);
        // }

        // try {
        //     $builder = $db->table('tbl_cars');
        //     $builder->where('id', $carId);
        //     $updated = $builder->update(['ad_status' => $status]);

        //     if ($updated) {
        //         return $this->response->setJSON([
        //             'success' => true,
        //             'message' => 'Status updated successfully.',
        //         ]);
        //     } else {
        //         return $this->response->setJSON([
        //             'success' => false,
        //             'message' => 'Failed to update status.',
        //         ]);
        //     }
        // } catch (DatabaseException $e) {
        //     return $this->response->setJSON([
        //         'success' => false,
        //         'message' => 'An error occurred: ' . $e->getMessage(),
        //     ]);
        // }
    }

    public function update_sale_status()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $model = new CarModel();
        $carId = $this->request->getVar('id');

        $car = $this->model->find($carId);


        $data = [
            'sale_status' => $this->request->getVar('sale_status')
        ];
        if ($this->model->update($carId, $data)) {
            return "Success";
        }
        return $this->request->getVar('sale_status');

    }


    public function create_inquiry($car_id)
    {
        $model = new InquiryModel();
        $data = [
            'customer_name' => $this->request->getVar('customer_name'),
            'customer_email' => $this->request->getVar('customer_email'),
            'customer_mobile' => $this->request->getVar('customer_mobile'),
            'customer_message' => $this->request->getVar('customer_message'),
            "car_id" => $car_id,
            'status' => 'PENDING',
        ];


        if ($model->save($data)) {
            // send an email to admin
            $carModel = new CarModel();
            $car = $carModel->find($car_id);
            $carName = $car['title'];

            $customerName = $data['customer_name'];
            $customerEmail = $data['customer_email'];
            $customerMobile = $data['customer_mobile'];
            $customerMessage = $data['customer_message'];

            $adminEmail = getenv('ADMIN_EMAIL');
            $subject = 'New Inquiry for ' . $carName;
            $message = "You have recieved a new inquiry on $carName\n\n" .
                "Customer Name: $customerName\n" .
                "Customer Email: $customerEmail\n" .
                "Customer Mobile: $customerMobile\n" .
                "Customer Message: $customerMessage";

            $email = \Config\Services::email();
            $email->setFrom($customerEmail, 'Kong - Admin');
            $email->setTo($adminEmail);
            $email->setSubject($subject);
            $email->setMessage($message);

            if ($email->send()) {
                $this->session->setFlashData('success', 'Inquiry submitted and email sent successfully');
            } else {
                $this->session->setFlashData('error', 'Inquiry submitted but failed to send email');
            }
            return redirect()->back();
        } else {
            $this->session->setFlashData('error', 'Error submitting inquiry');
            return redirect()->back();
        }
    }

    public function get_all_inquiries()
    {
        $model = new InquiryModel();
        $inquiries = $model->findAll();
        return view('inquiries', ['inquiries' => $inquiries]);
    }

    public function get_inquiries_by_car($car_id)
    {
        $model = new InquiryModel();
        $inquiries = $model->where('car_id', $car_id)->findAll();
        return $this->response->setJSON(['inquiries' => $inquiries]);
    }




    public function delete_()
    {
        if (!$this->session->has('user') || !$this->session->has('token')) {
            // Authentication failed, show 404 page
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Page not found');
        }
        $carId = $this->request->getVar('id');
        $model = new CarModel();
        $car = $model->find($carId);

        if (!$car) {
            return redirect()->back()->with('error', 'Car not found');
        }

        if ($model->delete($carId)) {
            return redirect()->to('/admin/car_listing')->with('message', 'Car deleted successfully');
        } else {
            log_message('error', 'Error deleting car: ' . json_encode($model->errors()));
            return redirect()->back()->with('error', 'Failed to delete the car');
        }
    }
    
    public function store2(){


        $model = new CarModel();
        $imageModel = new ImageModel();



        // Collect data from the request
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'metakeywords' => $this->request->getVar('metakeywords'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',
            'main_vehicle_type' => $this->request->getVar('main_vehicle_type'),
            'sub_vehicle_type' => $this->request->getVar('sub_vehicle_type'),
            'type' => $this->request->getVar('type'),
        ];

        // set null as type according to vehicle type
//        $vehicleType = $data['vehicle_type'];
//        if ($vehicleType === 'Car') {
//            $data['type'] = $this->request->getVar('type');
//        }
//
//        if ($vehicleType === 'Truck') {
//            $data['type'] = $this->request->getVar('type');
//        }


        log_message('info', 'Received data: ' . json_encode($data));

        if ($model->save($data)) {
            $carId = $model->insertID();
            echo $carId;
            $files = $this->request->getFiles();
            $youtubeUrl = $this->request->getVar('img_url');
            echo json_encode($files["images"][0]);

            $fileCount = 0;
            $failedFiles = [];

            $watermarkPath = FCPATH . '/assets/images/watermark/watermark2.png';

             // Generate the permalink
        $permalinkTitle = strtoupper(str_replace(' ', '-', $data['title']));
        $permalink = "RNR-00{$carId}-{$permalinkTitle}";
        $model->update($carId, ['permalink' => $permalink]);

        // Generate the Stock_number
        $stock_number = "RNR-00{$carId}";
        $model->update($carId, ['stock_number' => $stock_number]);
            	


        // Log the permalink
        log_message('info', 'Generated permalink: ' . $permalink);

            if (!file_exists($watermarkPath)) {
                return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark image not found ']);
            }
            if (isset($files['images'])) {
                foreach ($files['images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        // Prepare the upload directory for the specific car
                        $uploadPath = FCPATH . 'uploads/' . $carId;
                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0755, true);
                        }

                        // Generate a random name for the image and move it
                        $newFileName = $file->getRandomName();
                        $filePath = $uploadPath . '/' . $newFileName;
                        $file->move($uploadPath, $newFileName);

                        // Compress and resize the image
                        $this->compressImage($filePath, 1 * 1024 * 1024);

                        // Insert image data into the database
                        $imageData = [
                            'type' => 'image',  // or 'type' can be dynamic based on your requirement
                            'img_url' => 'uploads/' . $carId . '/' . $newFileName,
                            'status' => 'active',
                            'car_id' => $carId,
                        ];

                        // Insert the image record
                        if ($imageModel->insert($imageData)) {
                            // Add watermark and compress again
                            $this->addWatermark($filePath, $watermarkPath);
                            $this->compressImage($filePath, 1 * 1024 * 1024);  // Optional: Re-compress

                            $fileCount++;
                        } else {
                            $failedFiles[] = $file->getName();  // Log failed file upload
                        }
                    } else {
                        $failedFiles[] = $file->getName();  // Invalid file or already moved
                    }
                }
            }

            

            // Process the YouTube URL
            if ($youtubeUrl) {
                $imageData = [
                    'type' => 'YouTube_URL',
                    'img_url' => $youtubeUrl,
                    'status' => 'active',
                    'car_id' => $carId,
                ];

               

                // Insert the YouTube URL data into the database
                $newImageId = $imageModel->insert($imageData);
                if ($newImageId) {
                    $fileCount++;
                } else {
                    $failedFiles[] = $youtubeUrl;
                }
            }



            // return $this->respondCreated(['message' => 'Car added successfully']);
        } else {
            log_message('error', 'Error adding car: ' . json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }

        // return $this->respondCreated(['message' => 'Car added successfully']);
        return redirect()->to('admin/car_listing');

    }


    public function store2_old(){


        $model = new CarModel();
        $imageModel = new ImageModel();

        // Collect data from the request
        $data = [
            'title' => $this->request->getVar('title'),
            'main_category_id' => $this->request->getVar('main-category'),
            'sub_category_id' => $this->request->getVar('sub-category'),
            'type' => $this->request->getVar('type'),
            'year' => $this->request->getVar('year'),
            'condition' => $this->request->getVar('condition'),
            'stock_number' => $this->request->getVar('stock_number'),
            'vin_number' => $this->request->getVar('vin_number'),
            'mileage' => $this->request->getVar('mileage'),
            'transmission' => $this->request->getVar('transmission'),
            'driver_type' => $this->request->getVar('driver_type'),
            'engine_size' => $this->request->getVar('engine_size'),
            'cylinders' => $this->request->getVar('cylinders'),
            'fuel_type' => $this->request->getVar('fuel_type'),
            'doors' => $this->request->getVar('doors'),
            'color' => $this->request->getVar('color'),
            'seats' => $this->request->getVar('seats'),
            'city_mpg' => $this->request->getVar('city_mpg'),
            'highway_mpg' => $this->request->getVar('highway_mpg'),
            'description' => $this->request->getVar('description'),
            'price_type' => $this->request->getVar('price_type'),
            'regular_price' => $this->request->getVar('regular_price'),
            'sale_price' => $this->request->getVar('sale_price'),
            'features' => json_encode($this->formatFeatures($this->request->getVar('features'))),
            'ad_status' => $this->request->getVar('ad_status') ?? 'published',


        ];

        log_message('info', 'Received data: ' . json_encode($data));

        if ($model->save($data)) {
            $carId = $model->insertID();
            echo $carId;
            $files = $this->request->getFiles();
            $youtubeUrl = $this->request->getVar('img_url');
            echo json_encode($files["images"][0]);

            $fileCount = 0;
            $failedFiles = [];

            $watermarkPath = FCPATH . '/assets/images/watermark/watermark2.png';

            if (!file_exists($watermarkPath)) {
                return $this->response->setStatusCode(ResponseInterface::HTTP_BAD_REQUEST)->setJSON(['message' => 'Watermark image not found ']);
            }
            if (isset($files['images'])) {
                foreach ($files['images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        // Prepare the upload directory for the specific car
                        $uploadPath = FCPATH . 'uploads/' . $carId;
                        if (!is_dir($uploadPath)) {
                            mkdir($uploadPath, 0755, true);
                        }

                        // Generate a random name for the image and move it
                        $newFileName = $file->getRandomName();
                        $filePath = $uploadPath . '/' . $newFileName;
                        $file->move($uploadPath, $newFileName);

                        // Compress and resize the image
                        $this->compressImage($filePath, 1 * 1024 * 1024);

                        // Insert image data into the database
                        $imageData = [
                            'type' => 'image',  // or 'type' can be dynamic based on your requirement
                            'img_url' => 'uploads/' . $carId . '/' . $newFileName,
                            'status' => 'active',
                            'car_id' => $carId,
                        ];

                        // Insert the image record
                        if ($imageModel->insert($imageData)) {
                            // Add watermark and compress again
                            $this->addWatermark($filePath, $watermarkPath);
                            $this->compressImage($filePath, 1 * 1024 * 1024);  // Optional: Re-compress

                            $fileCount++;
                        } else {
                            $failedFiles[] = $file->getName();  // Log failed file upload
                        }
                    } else {
                        $failedFiles[] = $file->getName();  // Invalid file or already moved
                    }
                }
            }

            // Process the YouTube URL
            if ($youtubeUrl) {
                $imageData = [
                    'type' => 'YouTube_URL',
                    'img_url' => $youtubeUrl,
                    'status' => 'active',
                    'car_id' => $carId,
                ];

                // Insert the YouTube URL data into the database
                $newImageId = $imageModel->insert($imageData);
                if ($newImageId) {
                    $fileCount++;
                } else {
                    $failedFiles[] = $youtubeUrl;
                }
            }



            // return $this->respondCreated(['message' => 'Car added successfully']);
        } else {
            log_message('error', 'Error adding car: ' . json_encode($model->errors()));
            return $this->failValidationErrors($model->errors());
        }

        // return $this->respondCreated(['message' => 'Car added successfully']);
        return redirect()->to('admin/car_listing');

    }

private function compressImage($imagePath, $targetSize)
    {
        // Load the image
        $imageInfo = getimagesize($imagePath);
        if ($imageInfo === false) {
            return;
        }

        // Create a new image resource from the file
        switch ($imageInfo['mime']) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($imagePath);
                break;
            case 'image/png':
                $image = imagecreatefrompng($imagePath);
                break;
            case 'image/gif':
                $image = imagecreatefromgif($imagePath);
                break;
            default:
                return; // Unsupported format
        }


        $quality = 100; // Start at max quality
        $step = 5; // Reduce quality in steps

        // Compress the image until the desired size is reached
        do {
            ob_start(); // Start output buffering
            imagejpeg($image, null, $quality); // Output the image to the buffer
            $imageData = ob_get_contents(); // Get the contents of the buffer
            ob_end_clean(); // Clean the buffer

            // Check the current size
            $currentSize = strlen($imageData);
            if ($currentSize > $targetSize) {
                $quality -= $step; // Decrease quality
            }
        } while ($currentSize > $targetSize && $quality > 0);

        // Save the compressed image back to the file
        imagejpeg($image, $imagePath, $quality);

        // Free up memory
        imagedestroy($image);
    }




    
    private function addWatermark($imagePath, $watermarkPath)
    {
        // Check if the image and watermark files exist
        if (!file_exists($imagePath) || !file_exists($watermarkPath)) {
            throw new \RuntimeException('Image or watermark file does not exist.');
        }
        // Load the main image from the given file path
        $image = imagecreatefromstring(file_get_contents($imagePath));
        // Load the watermark from the given file path
        $watermark = imagecreatefromstring(file_get_contents($watermarkPath));
        // Get dimensions of the main image (width and height)
        $imageWidth = imagesx($image);
        $imageHeight = imagesy($image);
        // Get dimensions of the watermark (width and height)
        $watermarkOriginalWidth = imagesx($watermark);
        $watermarkOriginalHeight = imagesy($watermark);
        // Define the size of the watermark as 20% of the main image width
        $watermarkWidth = $imageWidth * 0.5;
        // Maintain the watermark's aspect ratio when resizing
        $aspectRatio = $watermarkOriginalHeight / $watermarkOriginalWidth;
        $watermarkHeight = $watermarkWidth * $aspectRatio;
        // Create a new true color image for the resized watermark
        $resizedWatermark = imagecreatetruecolor($watermarkWidth, $watermarkHeight);
        // Preserve transparency in the resized watermark
        imagesavealpha($resizedWatermark, true);
        $transColor = imagecolorallocatealpha($resizedWatermark, 0, 0, 0, 127); // Fully transparent color
        imagefill($resizedWatermark, 0, 0, $transColor);
        // Resize the original watermark to fit the new dimensions
        imagecopyresampled(
            $resizedWatermark,   // Destination image (resized)
            $watermark,          // Source image (original watermark)
            0, 0,                // Destination x and y (top left of the resized watermark)
            0, 0,                // Source x and y (top left of the original watermark)
            $watermarkWidth,     // New width of the resized watermark
            $watermarkHeight,    // New height of the resized watermark
            $watermarkOriginalWidth,  // Original width of the watermark
            $watermarkOriginalHeight  // Original height of the watermark
        );
        // *** Update: Calculate position for the watermark (center of the image) ***
        // Calculate the x-coordinate to center the watermark horizontally
        $destX = ($imageWidth / 2) - ($watermarkWidth / 2);
        // Calculate the y-coordinate to center the watermark vertically
        $destY = ($imageHeight / 2) - ($watermarkHeight / 2);
        // Merge the watermark with the main image at the calculated position
        imagecopy(
            $image,               // Destination image (main image)
            $resizedWatermark,     // Source image (resized watermark)
            $destX, $destY,        // Destination x and y (center of the image)
            0, 0,                 // Source x and y (top left of the resized watermark)
            $watermarkWidth,       // Width of the watermark
            $watermarkHeight       // Height of the watermark
        );
        // Save the final image with the watermark to the same path
        imagepng($image, $imagePath);
        // Free up memory used by the images
        imagedestroy($image);
        imagedestroy($watermark);
        imagedestroy($resizedWatermark);
    }





























}


