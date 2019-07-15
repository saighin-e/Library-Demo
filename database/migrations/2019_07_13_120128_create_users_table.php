<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
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
                CREATE TABLE `users` (
                  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `name` VARCHAR(100) NOT NULL,
                  `last_name` VARCHAR(100) NOT NULL,
                  `email` VARCHAR(30) NOT NULL,
                  `year_of_birth` INT(4) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
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
                DROP TABLE IF EXISTS `users`;
            ";

        DB::statement($queryString);
    }
}
