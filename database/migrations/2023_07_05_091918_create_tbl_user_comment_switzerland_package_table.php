<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserCommentSwitzerlandPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_comment_switzerland_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('switzerland_name');
            $table->string('switzerland_email');
            $table->string('switzerland_website');
            $table->string('switzerland_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_comment_switzerland_package');
    }
}
