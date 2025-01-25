<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserCommentThailandPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_comment_thailand_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thailand_name');
            $table->string('thailand_email');
            $table->string('thailand_website');
            $table->string('thailand_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_comment_thailand_package');
    }
}
