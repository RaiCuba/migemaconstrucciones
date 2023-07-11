<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles1 = Role::create(['name' => 'Administrador']);
        $roles2 = Role::create(['name' => 'Empleado']);
        $roles3 = Role::create(['name' => 'Gerente']);

        //permisos para los nombre de lasrutas
        Permission::create(['name' => 'admin.home']);

        Permission::create(['name' => 'admin.categoiria.index']);
        Permission::create(['name' => 'admin.categoiria.create']);
        Permission::create(['name' => 'admin.categoiria.edit']);
        Permission::create(['name' => 'admin.categoiria.delete']);

        Permission::create(['name' => 'admin.lugar.index']);
        Permission::create(['name' => 'admin.lugar.create']);
        Permission::create(['name' => 'admin.lugar.edit']);
        Permission::create(['name' => 'admin.lugar.delete']);

        Permission::create(['name' => 'admin.producto.index']);
        Permission::create(['name' => 'admin.producto.create']);
        Permission::create(['name' => 'admin.producto.edit']);
        Permission::create(['name' => 'admin.producto.delete']);

        // $roles1->permissions()->attach([1.2.3...])
    }
}
