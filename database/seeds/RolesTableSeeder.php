<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('roles')->insert([
      'slug' => 'superadmin',
      'name' => 'Super Admin',
      'description' => 'Super Admin User',
    ]);
    
    DB::table('roles')->insert([
      'slug' => 'admin',
      'name' => 'Admin',
      'description' => 'Admin User',
    ]);

    DB::table('roles')->insert([
      'slug' => 'guest',
      'name' => 'Guest',
      'description' => 'Moderator User',
    ]);
  }
}
