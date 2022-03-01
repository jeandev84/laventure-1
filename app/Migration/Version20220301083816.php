<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint;


/**
 * Class Version20220301083816
 *
 * @package Laventure\Component\Database\Migration
*/
class Version20220301083816 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('teachers', function (BluePrint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('age', 10);
            $table->text('address');
            $table->timestamps();
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
