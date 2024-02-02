<?php

namespace Database\Seeders;

use App\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Business::create([
            'business_name' => "Business Name",
            'business_location' => "Business Location",
            'business_phone_number' => "+254792009556",
            'website_link' => "website link",
            'category_id' => 1,
            'user_id' => 1,
        ]);
    }
}
