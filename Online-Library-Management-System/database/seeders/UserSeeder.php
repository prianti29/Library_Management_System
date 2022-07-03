<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name= "name";
        $user->email= "admin@admin.com";
        $user->password=  Hash::make("12345678");
        $user->is_admin= true;
        $user->save();
    }
}
