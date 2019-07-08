<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateReadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {

        $queryString = /** @lang text */
            "
                CREATE TABLE `readers` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `user_id` TINYINT(3) NOT NULL,
                  `first_name` VARCHAR(30) NOT NULL,
                  `last_name` VARCHAR(30) NOT NULL,
                  `email` VARCHAR(30) NOT NULL,
                  `phone` VARCHAR(12) NOT NULL,
                  `address` VARCHAR(50) NOT NULL,
                  `gender` VARCHAR(10) DEFAULT NULL,
                  `year_of_birth` INT(4) DEFAULT NULL,
                  `books` VARCHAR(50) DEFAULT NULL,
                  
                CONSTRAINT `fk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) 
                ON UPDATE CASCADE ON DELETE CASCADE
                ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
            ";

        DB::statement($queryString);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        $queryString = /** @lang text */
            "
                DROP TABLE IF EXISTS `readers`;
            ";

        DB::statement($queryString);
    }
}
