<?php
use App\User;

public function index() 
{
     return User::get();     
}
