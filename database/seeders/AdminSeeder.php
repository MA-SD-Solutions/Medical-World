<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'superAdmin',
            'email' => 'admin@admin.com',
            'phone' => '01354785412',
            'type' => 'admin',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
        ]);

        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1',
            'user_type' => 'App\Models\User',
        ]);

    }
}
