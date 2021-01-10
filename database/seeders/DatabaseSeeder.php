<?php

use Illuminate\Database\Seeder;

use App\Models\Department;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        $deprt_id = Department::create(['name'=>'IT Department']);
        Department::create(['name'=>'Account Department']);
        Department::create(['name'=>'Sales Department']);
        Department::create(['name'=>'Marketing Department']);

        $admin_id = Role::create(['name'=>'admin', 'description'=>'admin']);
        Role::create(['name'=>'manager', 'description'=>'manager']);
        Role::create(['name'=>'staff', 'description'=>'staff']);
        Role::create(['name'=>'supervisor', 'description'=>'supervisor']);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'department_id'=>$deprt_id,
            'role_id'=>$admin_id,
            'start_from'=>NOW(),
            'designation'=>'admin',
            'email_verified_at'=>NOW(),
            'image'=>'avatar2.png'
		]);
    }
}
