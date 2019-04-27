<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
public function run() 
{     
     User::create([
          'name' => 'test',
          'email' => 'test@test.com',
          'password' => '1234567890'
     ]);
}