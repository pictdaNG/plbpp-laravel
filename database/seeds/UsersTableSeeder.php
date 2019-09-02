<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $superAdminCredentials = [
      'first_name' => 'Super',
      'last_name' => 'Admin',
      'phone' => '1234567890',
      'email' => 'superadmin@plbpp.plateaustate.gov.ng',
      'username' => 'superadmin',
      'password' => 'secret',
      'slug' => 'super-admin'
    ];
    
    $superAdmin = Sentinel::registerAndActivate($superAdminCredentials, true);
    $role = Sentinel::findRoleBySlug('superadmin');
    $role->users()->attach($superAdmin);
    
    $adminCredentials = [
      'first_name' => 'Admin',
      'last_name' => 'Admin',
      'phone' => '1234567890',
      'email' => 'admin@plbpp.plateaustate.gov.ng',
      'username' => 'admin',
      'password' => 'secret',
      'slug' => 'admin'      
    ];

    $admin = Sentinel::registerAndActivate($adminCredentials, true);
    $role = Sentinel::findRoleBySlug('admin');
    $role->users()->attach($admin);
    
    $userCredentials = [
      'first_name' => 'Nani',
      'last_name' => 'Author',
      'phone' => '1234567890',
      'email' => 'user@plbpp.plateaustate.gov.ng',
      'username' => 'guest',
      'password' => 'secret',
      'slug' => 'nani-user'
    ];
    
    $user = Sentinel::registerAndActivate($userCredentials, true);
    $role = Sentinel::findRoleBySlug('guest');
    $role->users()->attach($user);
  }
}
