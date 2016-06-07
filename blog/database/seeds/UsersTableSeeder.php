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

        
    	
    factory(App\User::class, 36)->create()->each(function($u) {
    $u->users()->save(factory(App\User::class)->make());

    });

    }
}
