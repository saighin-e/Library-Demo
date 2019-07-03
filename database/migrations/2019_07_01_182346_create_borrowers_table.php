<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
//        Schema::create('borrowers', static function (Blueprint $table) {
//            $table->bigIncrements('id');
//            $table->string('email');
//            $table->string('phone');
//            $table->string('first_name');
//            $table->string('last_name');
//            $table->string('sex');
//            $table->string('gender');
//            $table->string('age');
//            $table->string('books_list');
//        });

        $queryString = "
            CREATE TABLE `borrowers` (
              `id` INT(11) UNSIGNED NOT NULL PRIMARY KEY,
              `first_name` VARCHAR(30) NOT NULL,
              `last_name` VARCHAR(30) NOT NULL,
              `email` VARCHAR(30) NOT NULL,
              `phone` VARCHAR(12) DEFAULT NULL,
              `gender` VARCHAR(10) DEFAULT NULL,
              `age` TINYINT(3) DEFAULT NULL,
              `books_list` VARCHAR(200) DEFAULT NULL
        )";

        DB::statement($queryString);

        $this->populateBorrowersTable();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
//        Schema::dropIfExists('borrowers');

        $queryString = "
             DROP TABLE IF EXISTS borrowers;
        ";

        DB::statement($queryString);
    }

    private function populateBorrowersTable(): void
    {
        $queryString = "INSERT INTO `borrowers` (`id` ,`first_name`, `last_name`, `email`, `phone`, `gender`, `age`, `books_list`)
                            VALUES  (1, 'Jimmy', 'Page', 'jimmy_page@email.com', '+1234567', 'male', 60, '1'),
                                    (2, 'Floyed', 'Mayweather', 'floyd_mayweather@email.com', '+987654321', 'male', 50, '2')
               ";

        DB::statement($queryString);
    }

}
