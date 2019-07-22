<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AlterAuthorsTableChangeYearType extends Migration
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
                ALTER TABLE `authors` MODIFY `year_of_birth` DATE NOT NULL;
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
                ALTER TABLE `authors` MODIFY `year_of_birth` INT(4) NOT NULL;
            ";

        DB::statement($queryString);
    }
}
