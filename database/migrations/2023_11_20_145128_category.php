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
        Schema::create('Category', function (Blueprint $table) {
            $table->id();
            $table->string('username') -> unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // 1: user, 0: là admin -> muốn tạo tk admin thì tạo trên web -> vào db đổi is_Admin = 0 là được
            $table->boolean('is_Admin')->default(1);
            $table->string('name') -> nullable();
            // 1: nam, 0: nữ -> ae nào làm update profile thì set lại
            $table->boolean('gender')->default(1);
            $table->string('address') -> nullable();
            $table->string('phone') -> nullable();
            $table->date('birthday')-> nullable();
            $table->rememberToken();
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
        //
    }
};
