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
                  `address` VARCHAR(100) NOT NULL,
                  `phone` VARCHAR(50) NOT NULL,
                  `year_of_birth` INT(4) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
