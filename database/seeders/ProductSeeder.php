<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert($this->getJsonData());
    }

    protected function getJsonData()
    {
        $path = database_path() . "/seeders/data.json";

        return json_decode(file_get_contents($path), true)['products'];
    }
}
