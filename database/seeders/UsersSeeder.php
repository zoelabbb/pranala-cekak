<?php

namespace Database\Seeders;

use File;
use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        $file_to_seed = "users.json";
        $file_location = "database/seeders/json/";
        $datas = json_decode(File::get($file_location . $file_to_seed));

        foreach ($datas as $key => $value) {
            Users::create([
                'email' => $value->email_address, // Use 'email' instead of 'email_address'
                'email_address' => $value->email_address,
                'full_name' => $value->full_name,
                'password' => Hash::make($value->password)
            ]);
        }
    }
}
