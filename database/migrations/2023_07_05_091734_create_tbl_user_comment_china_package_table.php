<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserCommentChinaPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_comment_china_package', function (Blueprint $table) {
            $table->increments('id');
            $table->string('china_name');
            $table->string('china_email');
            $table->string('china_website');
            $table->string('china_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user_comment_china_package');
    }
}
