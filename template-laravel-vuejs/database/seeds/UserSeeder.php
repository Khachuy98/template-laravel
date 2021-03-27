<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'admin@ecommerce.com',
            'password' => '12345678x@X',
            'name' => 'Sean',
            'role_oid' => 1,
            'created_by' => 'admin@ecommerce.com',
            'updated_by' => 'admin@ecommerce.com'
        ]);

        User::create([
            'email' => 'staff@writepath.co',
            'password' => '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92',
            'name' => 'WritePath Ltd',
            'role_oid' => 4,
            'charge_type' => 1,
            'charge_unit_price' => 10,
            'created_by' => 'admin@ecommerce.com',
            'updated_by' => 'admin@ecommerce.com'
        ]);
    }
}
