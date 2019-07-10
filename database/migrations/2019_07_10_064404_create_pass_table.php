<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassTable extends Migration
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
                CREATE TABLE `pass_cards` (
                  `pass_card_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  `pass_code` VARCHAR(55) NOT NULL,
                  `user_id` INT(11) UNSIGNED NOT NULL,
                  `pass_emission_date` DATE NULL, 
                  `pass_expiry_date` DATE NULL 
                ) ENGINE=InnoDB AUTO_INCREMENT=23453 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
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
                DROP TABLE IF EXISTS `pass_cards`;
            ";

        DB::statement($queryString);
    }
}
