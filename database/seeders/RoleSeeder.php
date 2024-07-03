<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // el sistema va tener 2 roles
        // administrador
        // secretaria

        $admin = Role::create(['name' => 'admin']);
        $secretaria = Role::create(['name' => 'secretaria']);
        $cliente = Role::create(['name' => 'cliente']);

        Permission::create(['name' => 'index'])->syncRoles([$admin,$secretaria,$cliente]);
        Permission::create(['name' => 'reportes'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'pdf'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'pdf_fechas'])->syncRoles([$admin, $secretaria]);
        Permission::create(['name' => 'home'])->syncRoles([$admin,$secretaria]);
        Permission::create(['name' => 'miembros'])->syncRoles([$admin]);
        Permission::create(['name' => 'ministerios'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'asistencias'])->syncRoles([$admin,$secretaria]);

        $admin = Role::findByName('admin');
        $secretaria = Role::findByName('secretaria');
        $cliente = Role::findByName('cliente');

        Permission::create(['name' => 'asistencias'])->syncRoles([$admin, $secretaria]);

        $user1 = User::find(1);
        if ($user1) {
            $user1->assignRole($admin);
        }

        $user2 = User::find(2);
        if ($user2) {
            $user2->assignRole($secretaria);
        }

        $user3 = User::find(3);
        if ($user3) {
            $user3->assignRole($cliente);
        }


    }
}
