<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Driver;
use App\Models\Customer;
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

        User::factory()->create([
            "name"=> 'Admin',
            'phone_number' => '0700000000',
            'pin' => Hash::make('1234'),
            'role' => 'admin',
            'password' => Hash::make('password')
        ]);

        // Create 5 Drivers
        $counties = ['Nairobi', 'Mombasa', 'Kisumu', 'Nakuru', 'Eldoret'];
        $subCounties = ['Central', 'East', 'West', 'North', 'South'];

        for ($i = 1; $i <= 5; $i++) {
            $user = User::create([
                'name' => 'Admin ' . $i,
                'email'=> 'admin'. $i. @'gmail.com',
                'phone_number' => '07' . str_pad($i, 8, '0', STR_PAD_LEFT),
                'pin' => Hash::make('1234'),
                'role' => 'driver',
                'password' => Hash::make('password')
            ]);

            Driver::create([
                'user_id' => $user->id,
                'name' => 'Driver ' . $i,
                'email'=> 'driver'. $i. @'gmail.com',
                'county' => $counties[array_rand($counties)],
                'sub_county' => $subCounties[array_rand($subCounties)],
                'is_active' => true
            ]);
        }

        
        for ($i = 6; $i <= 10; $i++) {
            $user = User::create([
                'name' => 'Customer ' . ($i - 5),
                'email'=> 'customer'. $i. @'gmail.com',
                'phone_number' => '07' . str_pad($i, 8, '0', STR_PAD_LEFT),
                'pin' => Hash::make('1234'),
                'role' => 'customer',
                'password' => Hash::make('password')
            ]);

            Customer::create([
                'email'=> 'customer'. $i. @'gmail.com',
                'user_id' => $user->id,
                'name' => 'Customer ' . ($i - 5)
            ]);
        }
    }
}
