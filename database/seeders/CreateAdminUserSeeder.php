<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mutant-Owner',
            'email' => 'owner@gmail.com',
            'password' => bcrypt('admin1234')
        ]);

        $role = Role::create(['name' => 'Owner']);
        Role::create(['name' => 'Manager']);
        Role::create(['name' => 'Accounts']);
        $adminRole=Role::create(['name' => 'Admin']);
        Role::create(['name' => 'CorporateOwner']);
        Role::create(['name' => 'CorporateManager']);
        Role::create(['name' => 'CorporateAdmin']);
        $clientRole=Role::create(['name' => 'Client']);
        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

        $admin = User::create([
            'name' => 'Mutant-Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1234')
        ]);
        $admin->assignRole([$adminRole->id]);

        $client = User::create([
            'name' => 'Mutant-Client',
            'email' => 'client@gmail.com',
            'password' => bcrypt('admin1234')
        ]);
        $client->assignRole([$clientRole->id]);

        
    }
}
