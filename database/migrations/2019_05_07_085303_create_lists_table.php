<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration{

    public function up(){
        Schema::create('lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('userId');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('lists');
    }
}
