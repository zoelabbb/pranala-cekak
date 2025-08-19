<?php

namespace Database\Seeders;

use File;
use App\Models\Microsites_contents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Microsites_contentsSeeder extends Seeder
{
    public function run(): void
    {
        $file_to_seed = "microsites_contents.json";
        $file_location = "database/seeders/json/";
        $datas = json_decode(File::get($file_location . $file_to_seed));

        foreach ($datas as $key => $value)
        {
            Microsites_contents::create([
                'microsites_id' => $value->microsites_id,
                'link_name' => $value->link_name,
                'url' => $value->url,
                'mulai' => $value->mulai ?? null, // Optional field
                'selesai' => $value->selesai ?? null // Optional field
            ]);
        }  
    }
}
