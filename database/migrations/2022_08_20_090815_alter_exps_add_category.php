<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exps', function (Blueprint $table) {
            $table->string('category', 250)
            ->after('title')
            ->default('Página');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exps', function (Blueprint $table) {
            $table->dropColumn('category');
        });
    }
};
