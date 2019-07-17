<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermitsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $queryString = /** @lang text */
            "
                INSERT INTO `permits` (
                    `id`,
                    `code_uuid`,
                    `user_id`, 
                    `emission_date`,
                    `expiry_date`
                )
                VALUES
                    (1, (SELECT UUID_SHORT()), 1, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (2, (SELECT UUID_SHORT()), 2, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (3, (SELECT UUID_SHORT()), 3, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (4, (SELECT UUID_SHORT()), 4, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (5, (SELECT UUID_SHORT()), 5, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (6, (SELECT UUID_SHORT()), 6, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (7, (SELECT UUID_SHORT()), 7, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (8, (SELECT UUID_SHORT()), 8, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (9, (SELECT UUID_SHORT()), 9, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (10, (SELECT UUID_SHORT()), 10, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}')
            ";

        DB::statement($queryString);
    }

    /**
     * Generates emission date
     *
     * @return string
     */
    public function generateEmissionDate(): string
    {
        return date('Y-m-d');
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
}
