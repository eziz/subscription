<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Business Plan',
                'slug' => 'business-plan',
                'stripe_plan' => 'price_1LqtZkKBZdhxZV4xNx4x6Fsc',
                'price' => 10,
                'description' => 'Business Plan'
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1LqxvyKBZdhxZV4xxbt7OjES',
                'price' => 50,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
