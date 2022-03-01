<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint;


/**
 * Class Version20220215172601
 *
 * @package Laventure\Component\Database\Migration
*/
class Version20220215172601 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('products', function (BluePrint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('price'); // unique
            $table->text('description');
            $table->boolean('featured'); // nullable fix for pgsql
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}