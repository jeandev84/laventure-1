<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint;


/**
 * Class Version20220215074342
 *
 * @package Laventure\Component\Database\Migration
*/
class Version20220215074342 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('region', function (BluePrint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('district')->nullable(); // unique
            $table->integer('code', 3);
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('region');
    }
}