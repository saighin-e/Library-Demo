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
                  `pass_id` VARCHAR(55) NOT NULL,
                  `pass_emission_date` DATE NULL, 
                  `pass_expiry_date` DATE NULL, 
                  `borrow_request_id` VARCHAR(11) NULL 
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
                DROP TABLE IF EXISTS `users`;
            ";

        DB::statement($queryString);
    }
}
