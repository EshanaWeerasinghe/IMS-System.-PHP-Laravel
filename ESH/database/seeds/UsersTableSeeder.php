<?php
use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
				
                                'role_id'=>1,
				'active'=>1,
				'name'=>'sethsaren',
				'username'=>'sethsaren',
				'email'=>'setharen@gmail.com',
				'password'=>bcrypt('seth.saren'),
				'remember_token'=>str_random(10),
                    
                                'role_id'=>2,
				'active'=>1,
				'name'=>'user',
				'username'=>'user',
				'email'=>'user@gmail.com',
				'password'=>bcrypt('123'),
				'remember_token'=>str_random(10),
            
                                'role_id'=>1,
				'active'=>1,
				'name'=>'Dr.Darshana',
				'username'=>'Dr.Darshana',
				'email'=>'darshana@iat.cmb.ac.lk',
				'password'=>bcrypt('1234'),
				'remember_token'=>str_random(10),
                                 
                           
				]);
				
    }
}
