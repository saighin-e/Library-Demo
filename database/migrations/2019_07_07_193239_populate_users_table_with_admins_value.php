<?php

use App\UUID\UniqueIDGenerator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class PopulateUsersTableWithAdminsValue extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @throws Exception
     */
    public function up(): void
    {
        DB::statement($this->prepareQueryForUsersTable());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // no need to do any down migration
    }

    /**
     * Prepare query for users table
     *
     * @return string
     *
     * @throws Exception
     */
    private function prepareQueryForUsersTable(): string
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
                    (11, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (12, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (13, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}'),
                    (14, '{$this->generateCode()}', '{$this->generateEmissionDate()}', '{$this->generateExpiryDate()}')
            ";

        return $queryString;
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
