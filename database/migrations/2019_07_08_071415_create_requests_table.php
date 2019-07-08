<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateRequestsTable extends Migration
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
                CREATE TABLE `borrowing_requests` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `user_id` VARCHAR(55) NOT NULL,
                  `book_ids` VARCHAR(55) NOT NULL,
                  `due_date` VARCHAR(55) NOT NULL,
                  
                CONSTRAINT `fk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) 
                ON UPDATE CASCADE ON DELETE SET NULL
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
                DROP TABLE IF EXISTS `borrowing_requests`;
            ";

        DB::statement($queryString);
    }
}
