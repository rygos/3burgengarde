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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('perm_activated')->default(0)->nullable();
            $table->integer('perm_admin')->default(0)->nullable();
            $table->integer('perm_finance')->default(0)->nullable();
            $table->integer('perm_calendar')->default(0)->nullable();
            $table->integer('perm_files')->default(0)->nullable();
            $table->integer('perm_news')->default(0)->nullable();
            $table->string('adr_street')->nullable();
            $table->string('adr_zip')->nullable();
            $table->string('adr_city')->nullable();
            $table->string('adr_country')->nullable();
            $table->integer('adr_public')->default(0)->nullable();
            $table->string('phone_home')->nullable();
            $table->string('phone_mobile')->nullable();
            $table->integer('phone_public')->default(0)->nullable();
            $table->date('start_membership')->nullable();
            $table->date('end_membership')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('perm_activated');
            $table->dropColumn('perm_admin');
            $table->dropColumn('perm_finance');
            $table->dropColumn('perm_calendar');
            $table->dropColumn('perm_files');
            $table->dropColumn('perm_news');
            $table->dropColumn('adr_street');
            $table->dropColumn('adr_zip');
            $table->dropColumn('adr_city');
            $table->dropColumn('adr_country');
            $table->dropColumn('adr_public');
            $table->dropColumn('phone_home');
            $table->dropColumn('phone_mobile');
            $table->dropColumn('phone_public');
            $table->dropColumn('start_membership');
            $table->dropColumn('end_membership');
        });
    }
};
