<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'empleado']);
        $role3 = Role::create(['name' => 'gerente']);
        //para varios roles syncRoles
        Permission::create(['name' => 'home'])->syncRole([$role1, $role2, $role3]);
        Permission::create(['name' => 'empleado.index']);
        Permission::create(['name' => 'empelado.registrar'])->syncRole([$role1]); //la ruta de (web)

        $user = User::find(1);
        $user->assignRole($role1);

        $user = User::find(2);
        $user->assignRole($role2);

        $user = User::find(3);
        $user->assignRole($role3);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
