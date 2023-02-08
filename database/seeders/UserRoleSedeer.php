<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserRoleSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at'     => Carbon::now(),
            'remember_token'        => Str::random(100),
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now(),
            'country'               => 'Indonesia'
        ];

        $user = User::create(array_merge([
            'name'          => 'user',
            'email'         => 'user@gmail.com',
            'password'      => Hash::make('password'),
        ], $default_user_value));

        $admin = User::create(array_merge([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => Hash::make('password'),
        ], $default_user_value));

        $superadmin = User::create(array_merge([
            'name'          => 'Super Admin',
            'email'         => 'superadmin@gmail.com',
            'password'      => Hash::make('password'),
        ], $default_user_value));

        $role_super_admin = Role::create(['name'    =>  'Super Admin']);
        $role_admin = Role::create(['name'    =>  'Admin']);
        $role_user = Role::create(['name'    =>  'User']);

        $superadmin->assignRole('Super Admin');
        $admin->assignRole('Admin');
        $user->assignRole('user');
    }
}
