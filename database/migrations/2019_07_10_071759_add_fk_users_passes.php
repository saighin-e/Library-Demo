<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class AddFkUsersPasses extends Migration
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
                ALTER TABLE `users` ADD CONSTRAINT pass_fk FOREIGN KEY (`pass_card_id`) 
                REFERENCES `pass_cards`(`pass_card_id`) 
                ON DELETE NO ACTION ON UPDATE NO ACTION
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
                ALTER TABLE `users` DROP FOREIGN KEY pass_fk;
            ";

        DB::statement($queryString);
    }
}
