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
            //foregin tables
            $table->foreignId('country_id')->nullable();
            $table->foreignId('group_id')->nullable();
            $table->foreignId('marital_status_id')->nullable();
            $table->foreignId('hduhau_id')->nullable();
            //other fields
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->date('DOB')->nullable();
            $table->string('occupation')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('church')->nullable();
            $table->string('pastor_name')->nullable();
            $table->string('membership_year')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Blocked'])->default('Inactive');
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
            $table->dropColumn('country_id');
            $table->dropColumn('group_id');
            $table->dropColumn('marital_status_id');
            $table->dropColumn('hduhau_id');
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('DOB');
            $table->dropColumn('membership_year');
            $table->dropColumn('status', ['Active', 'Inactive', 'Blocked'])->default('Inactive');
        });
    }
};
