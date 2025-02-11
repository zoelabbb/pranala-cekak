<?php

namespace Database\Seeders;

use File;
use App\Models\Redirects;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RedirectsSeeder extends Seeder
{
    public function run(): void
    {
        $file_to_seed = "redirects.json";
        $file_location = "database/seeders/json/";
        $datas = json_decode(File::get($file_location . $file_to_seed));

        foreach ($datas as $key => $value)
        {
            Redirects::create([
                'users_id' => $value->users_id,
                'uri' => $value->uri,
                'redirect' => $value->redirect,
                'url' => $value->url
            ]);
        }  
    }
}
