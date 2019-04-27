<?php
     use App\Http\Controllers\Controller;
     namespace App\Http\Controllers;
     use App\User;
     class UserController extends Controller
	{
        
          public function index() 
          {
               return User::get();     
          }
     }
