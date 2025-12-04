<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealEstateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fgrs_real_estate_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->text('reply')->nullable();
            $table->foreignId('reply_by')->nullable()->index();
            $table->enum('status',['open','pending','closed'])->default('open')->comment('open,pending,closed');
            $table->string('route_url')->nullable();
            $table->enum('route_name',['contact_us', 'popup', 'chatbot', 'signup', 'admin', 'feedback' ,'free_market_analysis', 'dream-home-finder'])->nullable()->comment('contact_us, popup, chatbot, signup, admin, feedback, free_market_analysis, dream-home-finder');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fgrs_real_estate_enquiries');
    }
}
