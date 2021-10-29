<?php
//php artisan db:seed --class=RoleSeeder
namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1= Role::create(['name'=>'admin']);
        $rol2= Role::create(['name'=>'escritor']);
        $rol3= Role::create(['name'=>'lector']);
        //COMPARTIDO
        Permission::create(['name'=>'Historias.destroy'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'Historias.destroy'])->syncRoles([$rol1,$rol2]);



        //ESCRITOR
        Permission::create(['name'=>'Historias.update'])->syncRoles([$rol2]);
        Permission::create(['name'=>'Historias.create'])->syncRoles([$rol2]);
        Permission::create(['name'=>'Historias.edit'])->syncRoles([$rol2]);


        //ADMINISTRADOR
        Permission::create(['name'=>'Libros.update'])->syncRoles([$rol1]);
        Permission::create(['name'=>'Libros.create'])->syncRoles([$rol1]);
        Permission::create(['name'=>'Libros.destroy'])->syncRoles([$rol1]);

        Permission::create(['name'=>'Libros.destroy'])->syncRoles([$rol1]);
        Permission::create(['name'=>'Libros.destroy'])->syncRoles([$rol1]);
    }
}
