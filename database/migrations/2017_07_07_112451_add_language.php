<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('education', function ($table) {
            $table->string('language')->after('site_id')->default('nl')->nullable()->index();
        });
        Schema::table('experiences', function ($table) {
            $table->string('language')->after('site_id')->default('nl')->nullable()->index();
        });
        Schema::table('contacts', function ($table) {
            $table->string('language')->after('site_id')->default('nl')->nullable()->index();
        });
        Schema::table('skills', function ($table) {
            $table->string('language')->after('site_id')->default('nl')->nullable()->index();
        });
        Schema::table('hobbies', function ($table) {
            $table->string('language')->after('site_id')->default('nl')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('education', function ($table) {
            $table->dropColumn('language');
        });
        Schema::table('experiences', function ($table) {
            $table->dropColumn('language');
        });
        Schema::table('contacts', function ($table) {
            $table->dropColumn('language');
        });
        Schema::table('skills', function ($table) {
            $table->dropColumn('language');
        });
        Schema::table('hobbies', function ($table) {
            $table->dropColumn('language');
        });
        
    }
}
