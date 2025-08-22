<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('microsites_contents', function (Blueprint $table) {
            $table->id()->comment('Column ID as a Primary key');
            $table->timestamps();
            $table->string('microsites_id', 10)->nullable(false)->comment('ID microsites sebagai pemilik konten ini');
            $table->string('link_name', 255)->nullable(false)->comment('Nama link yang akan ditampilkan');
            $table->string('url', 255)->nullable(false)->comment('Link yang akan dituju');
            $table->dateTime('mulai')->nullable(true)->comment('Waktu mulai ditampilkan. Jika null, berarti tidak ada waktu mulai');
            $table->dateTime('selesai')->nullable(true)->comment('Waktu selesai ditampilkan. Jika null, berarti tidak ada waktu selesai');

            // table comment
            $table->comment('Microsites Contents informations');
        });

        Schema::table('microsites_contents', function (Blueprint $table) {
            if (Schema::hasColumn('microsites', 'created_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `created_at` `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP');
            }
            if (Schema::hasColumn('microsites', 'updated_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `updated_at` `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microsites_contents');
    }
};
