<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name =  'Francisco Guerrero';
        $user->email = 'guerrero.nfsmw@gmail.com';
        $user->password = bcrypt('secret'); 
        $user->save();

        for ($i=0; $i < 50 ; $i++) { 
        	$user->movements()->save(factory(App\Movement::class)->make());
        }

        factory(App\User::class, 10)->create()->each(function ($u) {
        	for ($i=0; $i < 100 ; $i++) { 
	        	$u->movements()->save(factory(App\Movement::class)->make());
	        }
        });
    }
}
