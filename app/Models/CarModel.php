<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $table = 'tbl_cars';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title',
        'main_category_id',
        'sub_category_id',
        'type',
        'year',
        'condition', // 
        'stock_number',
        'vin_number',
        'mileage',
        'transmission', // 
        'driver_type', // 
        'engine_size',
        'cylinders',
        'fuel_type', // 
        'doors',
        'color',    //
        'seats',
        'city_mpg',
        'highway_mpg',
        'description',
        'price_type',
        'regular_price',
        'sale_price',
        'features',
        'ad_status',
        'created_date',
        'main_vehicle_type',
        'sub_vehicle_type',
        'metakeywords',
        'permalink',
        'sale_status'
    ];




    public function filterCars($filters = [])
    {
        $builder = $this->builder(); // Initialize the query builder

        if (!empty($filters)) {
            foreach ($filters as $key => $value) {
                if (!empty($value)) {
                    switch ($key) {
                        case 'condition':
                        case 'type':
                        case 'transmission':
                        case 'driver_type':
                        case 'fuel_type':
                        case 'color':
                        case 'engine_size':
                            $builder->where($key, $value);
                            break;
                        case 'regular_price':
                            // Ensure price is in 'min-max' format
                            if (strpos($value, '-') !== false) {
                                list($minPrice, $maxPrice) = explode('-', $value);

                                // Trim the values to remove any leading or trailing spaces
                                $minPrice = trim($minPrice);
                                $maxPrice = trim($maxPrice);

                                // Ensure minPrice and maxPrice are valid numbers
                                if (is_numeric($minPrice) && is_numeric($maxPrice)) {
                                    $builder->where('regular_price >=', $minPrice);
                                    $builder->where('regular_price <=', $maxPrice);
                                }
                            }
                            break;
                        case 'mileage':
                            if (is_numeric($value)) {
                                $builder->where('mileage <=', $value);
                            }
                            break;
                        case 'year':
                            // Assuming year filter is a range, e.g., '2000-2024'
                            if (strpos($value, '-') !== false) {
                                list($minYear, $maxYear) = explode('-', $value);
                                if (is_numeric(trim($minYear)) && is_numeric(trim($maxYear))) {
                                    $builder->where('year >=', trim($minYear));
                                    $builder->where('year <=', trim($maxYear));
                                }
                            } else if (is_numeric($value)) {
                                $builder->where('year', $value);
                            }
                            break;
                        default:
                            // No action needed for unrecognized filters
                            break;
                    }
                }
            }
        }

        return $builder->get()->getResultArray();  // Execute the query and return results
    }
}
