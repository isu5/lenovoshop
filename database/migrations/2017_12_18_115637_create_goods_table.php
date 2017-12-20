<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid')->defalut('0')->comment('栏目');
            $table->integer('tid')->defalut('0')->comment('属性id');
            $table->string('title')->comment('商品标题');
            $table->string('info')->comment('商品简介');
            $table->string('goods_price')->comment('商品价格');
            $table->bigInteger('goods_num')->default('9999')->comment('商品库存');
            $table->string('goods_img')->comment('商品图片');
            $table->text('goods_description')->comment('商品详细');
            $table->text('goods_config')->comment('配置信息');
            $table->text('goods_server')->comment('服务支持');
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
        Schema::dropIfExists('goods');
    }
}
