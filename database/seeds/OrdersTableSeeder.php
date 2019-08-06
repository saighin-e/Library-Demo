<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Seeder for the user table
     *
     * @return void
     *
     * @throws Exception
     */
    public function run(): void
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `user_orders` (
                    `user_id`
                )
                SELECT
                    `id`
                FROM 
                    `users`;
            ";

        DB::statement($queryString);

        $queryString2 = /** @lang text */
            "
                UPDATE `user_orders`
                SET `due_date` = '{$this->generateDueDate()}'
                WHERE `due_date` IS NULL;
            ";

        DB::statement($queryString2);
    }

    /**
     * Generates due date
     *
     * @return string
     */
    protected function generateDueDate(): string
    {
        return date('Y-m-d', strtotime('+1 year'));
    }
}
