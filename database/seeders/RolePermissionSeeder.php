<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\GymManager;
use Illuminate\Contracts\Auth\Guard;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::find(1);
        $allPermissions = Permission::all();

        $roleAdmin->givePermissionTo($allPermissions);


        $roleCoach = Role::find(2);
        $roleCoach->givePermissionTo([
            'update coach', 'update session',
            'delete session',
            'read user', 'read coach', 'read package',

            'read session', 'assign coach'
        ]);
    }
}
