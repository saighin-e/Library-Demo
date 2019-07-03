<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
//        Schema::create('authors', static function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('name');
//            $table->string('pseudonim');
//            $table->string('dob');
//            $table->string('book_ids');
//        });

        $queryString = "
            CREATE TABLE `authors` (
              `id` INT(11) UNSIGNED NOT NULL PRIMARY KEY,
              `name` VARCHAR(255) NOT NULL,
              `pseudonim` VARCHAR(255) DEFAULT NULL,
              `dob` VARCHAR(255) NOT NULL,
              `book_ids` TINYINT(2) DEFAULT NULL
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
//        Schema::dropIfExists('authors');

        $queryString = "
             DROP TABLE IF EXISTS authors;
        ";

        DB::statement($queryString);
    }

    /**
     * Populates authors table
     */
    private function populateBooksTable(): void
    {
        $queryString = "INSERT INTO `authors` (`id` ,`name`, `pseudonim`, `dob`, `book_ids`)
                            VALUES  (1 , 'Lewis Carroll', null, '1800-01-02', 1),
                                    (2 , 'Herman Hesse', null, '1800-01-02', 2),
                                    (3 , 'Henry Longfellow', null, '1800-01-02', 3)";

        DB::statement($queryString);
    }
}
