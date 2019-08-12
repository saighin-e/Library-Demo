<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeDatatypeBooksTitle extends Migration
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
                ALTER TABLE `books` MODIFY `title` TEXT NOT NULL;
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
                ALTER TABLE `books` MODIFY `title` VARCHAR(100) NOT NULL;
            ";

        DB::statement($queryString);
    }
}
