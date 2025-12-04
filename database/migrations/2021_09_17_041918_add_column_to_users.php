<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');
            $table->string('phone')->nullable()->after('email');
            $table->enum('domain',['crm','fgrealestate','leasetoown'])->nullable()->after('remember_token')->comment('crm, fgrealestate, leasetoown');
            $table->enum('status',['0','1'])->default(1)->after('domain')->comment('0=>Inactive, 1=>Active');
            $table->integer('verification_code')->nullable()->after('status');
            $table->text('image_name')->nullable()->after('verification_code');
            $table->text('image_path')->nullable()->after('image_name');
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
            //
        });
    }
}
