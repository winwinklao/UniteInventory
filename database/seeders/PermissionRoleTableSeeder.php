<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $manager_permissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($manager_permissions->pluck('id'));

        // $suppliers_permissions = $manager_permissions->filter(function ($permission) {
        //     return substr($permission->title, 0, 5) != 'user_';
        // });
        // Role::findOrFail(2)->permissions()->sync($suppliers_permissions);

        // $distribution_permissions = $manager_permissions->filter(function ($permission) {
        //     return substr($permission->title, 0, 5) != 'user_';
        // });
        // Role::findOrFail(3)->permissions()->sync($distribution_permissions);

        // $PO_permissions = $manager_permissions->filter(function ($permission) {
        //     return substr($permission->title, 0, 5) != 'user_';
        // });
        // Role::findOrFail(4)->permissions()->sync($PO_permissions);

        // $IC_permissions = $manager_permissions->filter(function ($permission) {
        //     return substr($permission->title, 0, 5) != 'user_';
        // });
        // Role::findOrFail(5)->permissions()->sync($IC_permissions);

        
        
    }
}
