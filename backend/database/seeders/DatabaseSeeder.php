<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Admin User',
//            'email' => 'admin@test.com',
//            'is_super_admin' => 1,
//        ]);


        \Illuminate\Support\Facades\DB::table('payment_methods')
            ->insert(array('name' => 'Paypal', 'slug' => 'paypal'));
        \Illuminate\Support\Facades\DB::table('payment_methods')
            ->insert(array('name' => 'Pay on delivery', 'slug' => 'cash'));
    }
}
