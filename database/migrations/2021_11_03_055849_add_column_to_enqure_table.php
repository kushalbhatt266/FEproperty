<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToEnqureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fgrs_real_estate_enquiries', function (Blueprint $table) {
            $table->string('fax')->nullable();
            $table->string('time_for_call')->nullable();
            $table->string('location')->nullable();
            $table->string('price')->nullable();
            $table->jsonb('property_type')->nullable();
            $table->string('sqft_area')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('near_school')->nullable();
            $table->jsonb('additional_preference')->nullable();
            $table->string('other_preference')->nullable();
            $table->string('soon_looking')->nullable();
            $table->string('sell_your_home')->nullable();
            $table->string('pre_qualified_for_loan')->nullable();
            $table->string('financing_info')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fgrs_real_estate_enquiries', function (Blueprint $table) {
            //
        });
    }
}
