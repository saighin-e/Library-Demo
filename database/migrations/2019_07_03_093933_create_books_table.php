<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('books', function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('title');
//            $table->string('condition');
//        });

        $queryString = "
            CREATE TABLE `books` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `title` VARCHAR(300) DEFAULT NULL,
              `author_id` TINYINT(3) DEFAULT NULL,
              `condition` VARCHAR(10) DEFAULT NULL,
              PRIMARY KEY (`id`)
        )";

        DB::statement($queryString);

        $this->populateBooksTable();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
//        Schema::dropIfExists('books');

        $queryString = "
             DROP TABLE IF EXISTS books;
        ";

        DB::statement($queryString);
    }

    /**
     * Populates books table
     */
    private function populateBooksTable(): void
    {
        $queryString = "INSERT INTO `books` (`id` ,`title`, `author_id`, `condition`)
                            VALUES  (1 , 'Alice in Wonderland', 1, 'mint'),
                                    (2 , 'Der Steppenwolf', 2, 'good'),
                                    (3 , 'The Cross of Snow', 3, 'old')";

        DB::statement($queryString);
    }
}
