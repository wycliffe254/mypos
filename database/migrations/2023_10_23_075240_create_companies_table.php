<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->default('LaravelPos');
            $table->string('company_address')->default('LaravelAddress');
            $table->string('company_phone')->default('+254755354655');
            $table->string('company_email')->default('LaravelPos@gmail.com');
            $table->string('company_fax')->default('+2546786867897');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
