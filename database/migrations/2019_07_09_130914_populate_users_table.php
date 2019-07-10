<?php

use App\UUID\UniqueIDGenerator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * @throws Exception
     */
    public function up(): void
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `users` (
                    `user_id`,
                    `pass_card_id`,
                    `borrow_request_id`
                )
                VALUES
                    (1, 1, 1),
                    (2, 2, 2),
                    (3, 3, 3),
                    (4, 4, 4),
                    (5, 5, 5),
                    (6, 6, 6),
                    (7, 7, 7),
                    (8, 8, 8),
                    (9, 9, 9),
                    (10, 10, 10)
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
                DELETE FROM `users` WHERE `user_id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Generates unique code
     *
     * @return string
     * @throws Exception
     */
    public function generateCode(): string
    {
        return UniqueIDGenerator::generateUniqueCode();
    }

    /**
     * Generates expiry date
     *
     * @return string
     */
    public function generateExpiryDate(): string
    {
        return date('Y-m-d', strtotime('+1 year'));
    }

    /**
     * Generates expiry date
     *
     * @return string
     */
    public function generateEmissionDate(): string
    {
        return date('Y-m-d');
    }
}
