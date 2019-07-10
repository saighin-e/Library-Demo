<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateBorrowingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::statement($this->populateBorrowersTable());
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
                DELETE FROM `borrowing_requests` WHERE `request_id` IS NOT NULL;
            ";

        DB::statement($queryString);
    }

    /**
     * Population data
     *
     * @return string
     */
    private function populateBorrowersTable(): string
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `borrowing_requests` (
                    `request_id`,
                    `user_id`,
                    `book_id`,
                    `due_date`
                )
                VALUES
                    (1, 1, 24, '{$this->generateDueDate()}'),
                    (2, 2, 25, '{$this->generateDueDate()}'),
                    (3, 2, 1, '{$this->generateDueDate()}'),
                    (4, 5, 12, '{$this->generateDueDate()}'),
                    (5, 7, 23, '{$this->generateDueDate()}'),
                    (6, 7, 22, '{$this->generateDueDate()}'),
                    (7, 7, 13, '{$this->generateDueDate()}'),
                    (8, 8, 15, '{$this->generateDueDate()}'),
                    (9, 10, 17, '{$this->generateDueDate()}'),
                    (11, 10, 18, '{$this->generateDueDate()}'),
                    (12, 9, 26, '{$this->generateDueDate()}'),
                    (13, 10, 29, '{$this->generateDueDate()}'),
                    (14, 1, 1, '{$this->generateDueDate()}'),
                    (15, 1, 14, '{$this->generateDueDate()}'),
                    (16, 4, 16, '{$this->generateDueDate()}'),
                    (17, 3, 17, '{$this->generateDueDate()}'),
                    (18, 2, 3, '{$this->generateDueDate()}'),
                    (19, 8, 5, '{$this->generateDueDate()}'),
                    (20, 7, 7, '{$this->generateDueDate()}'),
                    (21, 10, 9, '{$this->generateDueDate()}'),
                    (22, 2, 15, '{$this->generateDueDate()}'),
                    (23, 2, 28, '{$this->generateDueDate()}'),
                    (24, 5, 17, '{$this->generateDueDate()}'),
                    (25, 6, 26, '{$this->generateDueDate()}'),
                    (26, 2, 28, '{$this->generateDueDate()}'),
                    (27, 1, 29, '{$this->generateDueDate()}'),
                    (28, 7, 7, '{$this->generateDueDate()}')
            ";

        return $queryString;
    }

    /**
     * Generates due date
     *
     * @return string
     */
    public function generateDueDate(): string
    {
        return date('Y-m-d', strtotime('+1 month'));
    }
}
