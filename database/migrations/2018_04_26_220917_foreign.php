<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function (Blueprint $table){
            $table->integer('rol_id')->unsigned()->default(2);
            $table->integer('unv_id')->unsigned();
            $table->integer('unv_fac_id')->unsigned();
            $table->integer('fac_dep_id')->unsigned();

            $table->foreign('rol_id')->references('id')->on('rol');
            $table->foreign('unv_id')->references('id')->on('university');
            $table->foreign('unv_fac_id')->references('id')->on('unv_fac');
            $table->foreign('fac_dep_id')->references('id')->on('fac_dep');
        });

        Schema::table('university',function (Blueprint $table){
            $table->integer('site_id')->unsigned();

            $table->foreign('site_id')->references('id')->on('webSite');
        });

        Schema::table('post',function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->integer('unv_id')->unsigned();
            $table->integer('unv_fac_id')->unsigned();
            $table->integer('fac_dep_id')->unsigned();
            $table->integer('dep_cour_id')->unsigned();

            $table->foreign('dep_cour_id')->references('id')->on('dep_cour');
            $table->foreign('fac_dep_id')->references('id')->on('fac_dep');
            $table->foreign('unv_fac_id')->references('id')->on('unv_fac');
            $table->foreign('unv_id')->references('id')->on('university');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('unv_fac',function (Blueprint $table){
            $table->integer('unv_id')->unsigned();
            $table->integer('fac_id')->unsigned();

            $table->foreign('fac_id')->references('id')->on('faculty');
            $table->foreign('unv_id')->references('id')->on('university');
        });

        Schema::table('fac_dep',function (Blueprint $table){
            $table->integer('unv_fac_id')->unsigned();
            $table->integer('dep_id')->unsigned();

            $table->foreign('dep_id')->references('id')->on('department');
            $table->foreign('unv_fac_id')->references('id')->on('unv_fac');
        });

        Schema::table('dep_cour',function (Blueprint $table){
            $table->integer('fac_dep_id')->unsigned();
            $table->integer('cour_id')->unsigned();

            $table->foreign('cour_id')->references('id')->on('course');
            $table->foreign('fac_dep_id')->references('id')->on('fac_dep');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
