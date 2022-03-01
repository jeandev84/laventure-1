<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint;


/**
 * Class Version20220215172630
 *
 * @package Laventure\Component\Database\Migration
*/
class Version20220215172630 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('users', function (BluePrint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->text('address');
            $table->string('code');
            $table->string('city');

            // ...
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}