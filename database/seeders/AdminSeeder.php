<?php

namespace Database\Seeders;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //lista de roles
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        //lista de permisos
        
        $permission = Permission::create(['name' => 'home'])->assignRole($admin);;
        $permission = Permission::create(['name' => 'user'])->assignRole($user);;



        /*/asigno los permisos
        $admin->givePermissionTo(['registros_index',
                                'registros_create',
                                'registros_edit',
                                'registros_destroy'
                                ]);
*/

        //asigno un rol a un usuario
        $user= User::find(1);
        $user->assignRole('Admin');

        
        
    }
}
