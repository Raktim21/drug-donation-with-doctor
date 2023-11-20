<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Admin',
            'User',
            'Doctor'
        ];
        
        foreach ($roles as $role) {
            if (Role::where('name', $role)->first() === null) {
                $role = Role::create(['name' => $role]);
            }
        }


        $user = User::where('email', 'admin@admin.com')->first();

        if ($user && !$user->hasRole('Admin')) {
            $user->assignRole('Admin');
        } 

        $permissions = [
            'admin-list',
            'admin-create',
            'admin-create',
            'admin-edit',
            'admin-edit',
            'admin-delete',
            'user-list',
            'user-create',
            'user-create',
            'user-edit',
            'user-edit',
            'user-delete',
            'user-edit',
            'drug-list',
            'drug-create',
            'drug-create',
            'drug-delete',

            'drugshop-list',
            'drugshop-request-list',
            'drugshop-create',
            'drugshop-edit',
        ];


        foreach ($permissions as $permission) {
            $per = Permission::where('name', $permission)->first();
            if ($per === null) {
                $per = Permission::create(['name' => $permission]);
            }

            $admin = Role::where('name', 'Admin')->first();
            $admin->givePermissionTo($per);

            $user = Role::where('name', 'User')->first();
            if (
                $permission == 'drugshop-list' ||
                $permission == 'drugshop-create' ||
                $permission == 'drugshop-edit'
            ) {
                if ($user->hasPermissionTo($permission)) {
                    $user->givePermissionTo($per);
                }
            }

            // $doctor = Role::where('name', 'Doctor')->first();
            // $doctor->givePermissionTo($per);
        }


    }
}
