<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('docents', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->text('hobby')->nullable();
            $table->timestamp('datum_invoer')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('docents');
    }
};
