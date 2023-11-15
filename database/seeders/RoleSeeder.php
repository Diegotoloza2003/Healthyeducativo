<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function run()
  {
    /* $role1 = Role::create(['name' => 'admin']);
    $role2 = Role::create(['name' => 'escritor']);
    $role3 = Role::create(['name' => 'lector']); */

    /* Eliminar las bases de datos */
    DB::table("roles")->delete();
    /* Ruta del jSON */
    $route = database_path('/factories/json/cargo.json');
    $json = file_get_contents($route);
    $data = json_decode($json);

    foreach ($data as $obj) {
      DB::table('roles')->insert([
        'name' => $obj->name,
        'guard_name' => 'web'
      ]);
    }

  }
}
