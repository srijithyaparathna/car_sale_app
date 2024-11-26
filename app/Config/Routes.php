<?php

use App\Controllers\CarController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'CarController::view_add_car');
$routes->post('register', 'Auth::register');
$routes->post('login_old', 'Auth::login_old');
$routes->post('login', 'Auth::login');
$routes->post('logout', 'Auth::logout');

$routes->post('/category/create', 'Category::create');
$routes->put('category/(:num)', 'Category::update/$1');
$routes->delete('category/(:num)', 'Category::delete/$1');
$routes->get('category/all', 'Category::getAll');

$routes->post('subcategory', 'SubCategory::createsub');
$routes->put('subcategory/(:num)', 'SubCategory::updatesub/$1');
$routes->delete('subcategory/(:num)', 'SubCategory::deletesub/$1');
$routes->get('subcategory/all', 'SubCategory::getAllsub');


$routes->get('/cars_filter', 'CarController::filterCars');


//$routes->get('login', 'Auth::login');
//$routes->match(['get', 'post'], 'login', 'Auth::login');

$routes->get('/login', 'LoginController::index');
$routes->post('/login_function', 'LoginController::login_function');
$routes->get('/admin/dashboard', 'DashboardController::index');
$routes->get('/logout', 'LogoutController::index');
$routes->get('admin/add_car', 'CarController::view_add_car');
//Inventory
$routes->get('admin/car_listing', 'CarController::view_admin_car_listing_page'); // Route to view the first page of car listings
$routes->get('admin/car_listing/page/(:num)', 'CarController::view_admin_car_listing_page/$1'); // Route for pagination
$routes->post('admin/update_status', 'CarController::update_status');
$routes->post('admin/update_sale_status', 'CarController::update_sale_status');
$routes->post('admin/delete_', 'CarController::delete_');


//testimonials
$routes->get('admin/testimonials', 'TestimonialController::index');
$routes->post('admin/testimonial/create', 'TestimonialController::create');
$routes->post('admin/testimonial/update', 'TestimonialController::updateTestimonial');
$routes->delete('admin/testimonials/(:num)', 'TestimonialController::delete/$1');

// main-types
$routes->get('admin/vehicle_types', 'TypeCon::index');


$routes->get('/db-test', 'DatabaseTestController::index');

$routes->get('cars', 'CarController::index');  // Get all cars
$routes->get('cars/page/(:num)', 'CarController::index/$1'); // Pagination
$routes->get('cars_', 'CarController::index_');


$routes->get('admin/add_car', 'CarController::view_add_car');

$routes->get('admin/add_car_view', 'CarController::view_add_car_2');

$routes->get('cars_category_for_filter', 'CarController::view_car_list');



$routes->post('cars', 'CarController::store');



// create a new car add addCar2
$routes->post('add_car_2','CarController::store2' );//

// Create a new car
$routes->get('cars_category_for_filter', 'CarController::view_car_list');

$routes->post('cars', 'CarController::store');           // Create a new car
$routes->get('cars/(:num)', 'CarController::show/$1');   // Get a specific car by ID
$routes->put('cars/(:num)', 'CarController::update/$1'); // Update a car by ID
$routes->delete('cars/(:num)', 'CarController::delete/$1'); // Delete a car by ID

$routes->post('add_images', 'ImageController::addImages'); // Add images to a car

// contact-us
$routes->get('contact-us', 'Contact::contactUs');
$routes->post('contact/submit', 'Contact::submit');

// about-us
$routes->get('about-us', 'AboutUsController::aboutUs');


// get images by car id
$routes->get('images/car/(:num)', 'ImageController::getImages/$1');

// get first image by car id
$routes->get('images/car/(:num)/first', 'ImageController::getFirstImage/$1');




// car-inquiry
$routes->post('inquiry/create/(:num)', 'CarController::create_inquiry/$1');
$routes->get('admin/inquiry/all', 'CarController::get_all_inquiries');
$routes->get('admin/inquiries/car/(:num)', 'CarController::get_inquiries_by_car/$1');

//Category
$routes->get('admin/category', 'Category::category_page');
$routes->post('category/create', 'Category::create');
$routes->get('subcategory/getAllsub', 'SubCategory::getAllsub');
$routes->post('subcategory', 'SubCategory::createsub');
$routes->get('admin/inquiry/all', 'CarController::get_all_inquiries');
$routes->get('admin/inquiries/car/(:num)', 'CarController::get_inquiries_by_car/$1');

$routes->get('admin/edit-car/(:num)', 'EditCarController::update/$1');
$routes->put('admin/edit-car/(:num)', 'EditCarController::update/$1');
$routes->get('admin/edit-cars/(:num)', 'EditCarController::show/$1'); 
$routes->post('admin/edit-car-image/(:num)', 'EditCarController::editImages/$1');

// edit car 2 page 
$routes->get('admin/edit-car-page-2/(:num)', 'EditCarController::update_page_2/$1');
$routes->put('admin/edit-car-page-2/(:num)', 'EditCarController::update_page_2/$1');
$routes->get('admin/edit-cars-page-2/(:num)', 'EditCarController::show/$1'); 
$routes->post('admin/edit-car-image-page-2/(:num)', 'EditCarController::editImages/$1');



$routes->delete('category/delete/(:num)', 'Category::delete/$1');
// $routes->post('category/updateName/(:num)', 'Category::updateName/$1');
$routes->post('category/updateName', 'Category::updateName');
$routes->post('category/updateNamesub', 'Category::updateNamesub');
$routes->get('images/get-watermark', 'ImageController::getwatermarkImage');


