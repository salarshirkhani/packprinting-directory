<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('logo', 4096); // To support long paths
            $table->string('name');

            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->on('company_categories')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->unsignedBigInteger('creator_id')->unique()->nullable();
            $table->foreign('creator_id')
                ->on('users')
                ->references('id')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->text('short_description');
            $table->text('content');

            $table->string('city');
            $table->string('province');
            $table->string('address', 1024);

            $table->string('instagram')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();

            $table->string('number');
            $table->string('website');
            $table->string('video', 4096);

            $table->string('level')->default('base');

            $table->string('state')->default('pending');

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
        Schema::dropIfExists('companies');
    }
}
