<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAdminsTable extends Migration
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
                CREATE TABLE `admins` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `user_id` TINYINT(3) NOT NULL,
                  `position` VARCHAR(30) NOT NULL,
                  `first_name` VARCHAR(30) NOT NULL,
                  `last_name` VARCHAR(30) NOT NULL,
                  `email` VARCHAR(30) NOT NULL,
                  `phone` VARCHAR(12) NOT NULL,
                  `address` VARCHAR(50) NOT NULL,
                  
                CONSTRAINT `fk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) 
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
                DROP TABLE IF EXISTS `admins`;
            ";

        DB::statement($queryString);
    }
}
