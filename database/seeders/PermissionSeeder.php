<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Links
        Permission::create(['name' => 'show dashboard']);
        Permission::create(['name' => 'show coaches side link']);
        Permission::create(['name' => 'show users side link']);
        Permission::create(['name' => 'show revenue link']);


        // Create
        Permission::create(['name' => 'create coach']);
        Permission::create(['name' => 'create package']);
        Permission::create(['name' => 'create session']);

        // Retrieve
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'read coach']);
        Permission::create(['name' => 'read package']);
        Permission::create(['name' => 'read session']);

        // Update
        Permission::create(['name' => 'update coach']);
        Permission::create(['name' => 'update package']);
        Permission::create(['name' => 'update session']);

        // Delete
        Permission::create(['name' => 'delete coach']);
        Permission::create(['name' => 'delete package']);
        Permission::create(['name' => 'delete session']);

        // other
        Permission::create(['name' => 'assign coach']);
        Permission::create(['name' => 'read revenue']);


    }
}
