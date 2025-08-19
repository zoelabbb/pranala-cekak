<?php

namespace Database\Seeders;

use File;
use App\Models\Microsites;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MicrositesSeeder extends Seeder
{
    public function run(): void
    {
        $file_to_seed = "microsites.json";
        $file_location = "database/seeders/json/";
        $datas = json_decode(File::get($file_location . $file_to_seed));

        foreach ($datas as $key => $value)
        {
            Microsites::create([
                'redirects_id' => $value->redirects_id,
                'micro_name' => $value->micro_name,
                'time' => $value->time,
                'location' => $value->location
            ]);
        }  
    }
}
