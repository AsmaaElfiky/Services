<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'add users']);


        Permission::create(['name' => 'edit service']);
        Permission::create(['name' => 'delete service']);
        Permission::create(['name' => 'add service']);


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'moderator']);
        $role->givePermissionTo(
            ['add service',
             'edit service',
             'delete service']);



        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());
    }
}
