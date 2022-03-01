<?php
namespace App\Migration;


use Laventure\Component\Database\Migration\Migration;
use Laventure\Foundation\Facade\Database\Schema;
use Laventure\Component\Database\Schema\BluePrint;


/**
 * Class Version20220217171949
 *
 * @package Laventure\Component\Database\Migration
*/
class Version20220217171949 extends Migration
{


    /**
      * @return void
    */
    public function up()
    {
        Schema::create('files', function (BluePrint $table) {
            $table->increments('id');
            $table->string('real_name');
            $table->string('hash_name', 350);
            $table->string('dir');
            $table->string('mime_type');
            $table->string('extension');
            // ...
        });
    }


    /**
     * @return void
    */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
