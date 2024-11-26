<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DatabaseTestController extends Controller
{
    public function index()
    {
        try {
            $db = \Config\Database::connect();

            if ($db->connID) {
                echo "Connected successfully to the database.";
            } else {
                echo "There was a problem connecting to the database.";
            }
        } catch (\mysqli_sql_exception $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";
            echo "SQLSTATE: " . $e->getSQLState() . "<br>";
            echo "Error Code: " . $e->getCode();
        }
    }
}
