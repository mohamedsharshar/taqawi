<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // Financial Statements
            'view financial statements',
            'create financial statements',
            'edit financial statements',
            'delete financial statements',
            
            // Meeting Minutes
            'view meeting minutes',
            'create meeting minutes',
            'edit meeting minutes',
            'delete meeting minutes',
            
            // IR Manager
            'view ir manager',
            'edit ir manager',
            
            // Users Management
            'view users',
            'create users',
            'edit users',
            'delete users',
            
            // Roles & Permissions
            'manage roles',
            'manage permissions',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create roles and assign permissions

        // Super Admin - has all permissions
        $superAdmin = Role::create(['name' => 'super-admin']);
        $superAdmin->givePermissionTo(Permission::all());

        // Admin - can manage content but not users/roles
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo([
            'view financial statements',
            'create financial statements',
            'edit financial statements',
            'delete financial statements',
            'view meeting minutes',
            'create meeting minutes',
            'edit meeting minutes',
            'delete meeting minutes',
            'view ir manager',
            'edit ir manager',
        ]);

        // Editor - can create and edit but not delete
        $editor = Role::create(['name' => 'editor']);
        $editor->givePermissionTo([
            'view financial statements',
            'create financial statements',
            'edit financial statements',
            'view meeting minutes',
            'create meeting minutes',
            'edit meeting minutes',
            'view ir manager',
        ]);

        // Viewer - read only
        $viewer = Role::create(['name' => 'viewer']);
        $viewer->givePermissionTo([
            'view financial statements',
            'view meeting minutes',
            'view ir manager',
        ]);

        // Create default super admin user
        $superAdminUser = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@arabseeds.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $superAdminUser->assignRole('super-admin');

        // Create default admin user
        $adminUser = User::create([
            'name' => 'Admin User',
            'email' => 'admin.user@arabseeds.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $adminUser->assignRole('admin');

        // Create default editor user
        $editorUser = User::create([
            'name' => 'Editor User',
            'email' => 'editor@arabseeds.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
        $editorUser->assignRole('editor');
    }
}
