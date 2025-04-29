<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);

        Permission::create(['name' => 'edit posts']);
        Permission::create(['name' => 'delete posts']);

        $admin = Role::findByName('admin');
        $admin->givePermissionTo(['edit posts', 'delete posts']);

        $editor = Role::findByName('editor');
        $editor->givePermissionTo('edit posts');
    }
}
