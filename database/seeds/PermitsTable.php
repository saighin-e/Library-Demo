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
                    `code_uuid`,
                    `user_id`, 
                    `emission_date`,
                    `expiry_date`
                )
                VALUES
                    ((SELECT UUID_SHORT()), 1, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 2, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 3, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 4, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 5, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 6, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 7, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 8, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 9, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    ((SELECT UUID_SHORT()), 10, '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}')
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
