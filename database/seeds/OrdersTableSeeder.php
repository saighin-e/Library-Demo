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
                INSERT INTO `user_orders` (
                    `due_date`
                )
                VALUES
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}'),
                    ( '{$this->generateDueDate()}')
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
