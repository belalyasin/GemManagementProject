<?php

namespace Database\Seeders;

use App\Models\CityManager;
use App\Models\GymManager;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignAdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$uQ/WIjMbfSOsAjlg0xj1E.MxED2Lef0S50uXuKEsPRTYLszqczdbG',
            'date_of_birth' => '1990-01-01',
            'gender' => 'male',
            'description' => 'مالك نادي سوبر جيم',
            'profile_img' => 'admin.png',

        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'adminFemale',
            'email' => 'adminFemale@admin.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$uQ/WIjMbfSOsAjlg0xj1E.MxED2Lef0S50uXuKEsPRTYLszqczdbG',
            'date_of_birth' => '1995-10-11',
            'gender' => 'female',
            'description' => 'المالكة لامور النساء في نادي سوبر جيم',
            'profile_img' => 'admin.png',

        ]);

        // Assign Role --> Admin
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 1,
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\User',
            'model_id' => 2,
        ]);
    }
}
