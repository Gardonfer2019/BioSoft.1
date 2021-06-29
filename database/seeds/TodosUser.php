<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class TodosUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $newUser=User::create([
            'name'=> 'Root',
            
            'email'=> 'root@gmail.com',
            'password'=>Hash::make('admin'),
            'type_user'=>'1',
            
        ]);
    }
}
