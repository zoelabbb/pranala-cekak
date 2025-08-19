<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\MySqlBuilder;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('microsites', function (Blueprint $table) {
            $table->id()->comment('Column ID as a Primary key');
            $table->timestamps();
            $table->string('redirects_id', 10)->nullable(false)->comment('ID redirects sebagai penanda pemilik acara');
            $table->string('micro_name', 255)->nullable(false)->comment('Nama acara yang akan ditampilkan');
            $table->dateTime('time')->nullable(false)->comment('Waktu pelaksanaan acara yang akan ditampilkan');
            $table->string('location', 255)->nullable(true)->comment('Tempat pelaksanaan acara yang akan ditampilkan');

            // table comment
            $table->comment('Microsites informations');
        });

        Schema::table('microsites', function (Blueprint $table) {
            if (Schema::hasColumn('microsites', 'created_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `created_at` `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP');
            }
            if (Schema::hasColumn('microsites', 'updated_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `updated_at` `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
            }
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('microsites');
    }
};
