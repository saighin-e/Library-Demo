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
                    `id`,
                    `pass_id`,
                    `pass_emission_date`, 
                    `pass_expiry_date`
                )
                VALUES
                    (1, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (2, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (3, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (4, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (5, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (6, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (7, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (8, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (9, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (10, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}')
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
                DELETE FROM `users` WHERE `id` IS NOT NULL;
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
