<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('项目名');
            $table->string('location')->comment('项目地点');
            $table->string('principal')->comment('负责人');
            $table->string('supervision')->comment('监督人');
            $table->date('dateStart')->comment('开始时间');
            $table->date('dateOver')->comment('结束时间');
            $table->integer('weight')->default(99)->comment('权重');
            $table->text('info')->comment('项目明细');
            $table->string('push')->comment('网站和公众号推送');
            $table->text('remark')->comment('备注');
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
        Schema::dropIfExists('projects');
    }
}
