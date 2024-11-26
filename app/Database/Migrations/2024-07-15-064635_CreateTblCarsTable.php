<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblCarsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'main_category_id' => [
                'type' => 'INT',
                'null' => true
            ],
            'sub_category_id' => [
                'type' => 'INT',
                'null' => true
            ],
            'type' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'year' => [
                'type' => 'YEAR',
                'null' => true
            ],
            'condition' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'stock_number' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'vin_number' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'mileage' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'transmission' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'driver_type' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'engine_size' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'cylinders' => [
                'type' => 'INT',
                'null' => true
            ],
            'fuel_type' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'doors' => [
                'type' => 'INT',
                'null' => true
            ],
            'color' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'seats' => [
                'type' => 'INT',
                'null' => true
            ],
            'city_mpg' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'highway_mpg' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'description' => [
                'type' => 'LONGTEXT',
                'null' => true
            ],
            'price_type' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true
            ],
            'regular_price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'sale_price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'features' => [
                'type' => 'LONGTEXT',
                'null' => true
            ],
            'ad_status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true
            ],
            'created_date' => [
                'type' => 'TIMESTAMP',
                'null' => true,
                'default' => 'CURRENT_TIMESTAMP'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_cars');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_cars');
    }
}
