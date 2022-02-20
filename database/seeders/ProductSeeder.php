<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(        
        [
            'name'=>'IPhone SE Gold',
            'price'=>'300',
            'description'=>'a smartphone with 7gb ram and much more features',
            'category'=>'mobile',
            'gallery'=>'https://www.mobilnionline.com/sites/default/files/proizvodi/mobilni-telefoni/iphone-se-gold.jpg'
        ]
    
    
    
    );
    }
}
