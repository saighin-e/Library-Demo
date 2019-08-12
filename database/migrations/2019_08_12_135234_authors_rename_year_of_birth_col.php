<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AuthorsRenameYearOfBirthCol extends Migration
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
                ALTER TABLE `authors` CHANGE COLUMN `year_of_birth` `date_of_birth` DATE NULL;
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
                ALTER TABLE `authors` CHANGE COLUMN `date_of_birth` `year_of_birth` INT(4) NOT NULL;
            ";

        DB::statement($queryString);
    }
}
