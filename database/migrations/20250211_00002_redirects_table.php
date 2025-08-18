<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\MySqlBuilder;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('redirects', function (Blueprint $table) {
            $table->id()->comment('Column ID as a Primary key');
            $table->timestamps();
            $table->dateTime('expired')->nullable(true)->default(NULL)->comment('this URI expired at');
            $table->boolean('active')->nullable(false)->default(true)->comment('this field is active or not?');
            $table->string('users_id', 10)->nullable(false)->comment('ID user yang memiliki field ini');
            $table->string('uri', 255)->nullable(false)->unique()->comment('URI yang dikenal');
            $table->boolean('redirect')->nullable(false)->default(true)->comment('if true then URI must be redirect to URL else it must be microsite');
            $table->string('url', 512)->nullable(true)->comment('URL yang asli');
            // table comment
            $table->comment('Redirection from URI to URL or as microsite');
        });

        Schema::table('redirects', function (Blueprint $table) {
            if (Schema::hasColumn('redirects', 'created_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `created_at` `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP');
            }
            if (Schema::hasColumn('redirects', 'updated_at')) {
                DB::statement('ALTER TABLE `redirects` CHANGE `updated_at` `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
            }
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('redirects');
    }
};
