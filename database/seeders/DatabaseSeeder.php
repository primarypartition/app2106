<?php

use Illuminate\Database\Seeder;

use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

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

        $deprt_1 = Department::create(['name'=>'IT Department']);
        Department::create(['name'=>'Account Department']);
        Department::create(['name'=>'Sales Department']);
        Department::create(['name'=>'Marketing Department']);

        $role_1 = Role::create(['name'=>'admin', 'description'=>'admin']);
        Role::create(['name'=>'manager', 'description'=>'manager']);
        Role::create(['name'=>'staff', 'description'=>'staff']);
        Role::create(['name'=>'supervisor', 'description'=>'supervisor']);

        Permission::create([
                            'role_id'=>$role_1->id,
                            'name'=> array(
                                    'department' =>    ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'role' =>          ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'permission' =>    ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'user' =>          ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'notice' =>        ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'mail' =>          ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1],
                                    'leave' =>         ['can-add' => 1,
                                                        'can-edit' => 1,
                                                        'can-delete' => 1,
                                                        'can-view' => 1,
                                                        'can-list' => 1])
        ]);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password'),
            'department_id'=>$deprt_1->id,
            'role_id'=>$role_1->id,
            'start_from'=>NOW(),
            'designation'=>'admin',
            'email_verified_at'=>NOW(),
            'image'=>'avatar2.png'
		]);
    }
}
