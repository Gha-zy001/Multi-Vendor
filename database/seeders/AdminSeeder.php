<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $roles = ['super_admin', 'admin', 'vendor', 'support_agent', 'finance'];
    foreach ($roles as $role) {
      Role::firstOrCreate(['name' => $role, 'guard_name' => 'admin']);
    }

    $superAdmin = Admin::create([
      'name' => 'Super Admin',
      'email' => 'admin@app.com',
      'password' => Hash::make('12345678'),
      'phone' => '1234567890',
      'avatar' => null,
      'is_active' => true,
    ]);

    $superAdmin->assignRole('super_admin');
  }
}
