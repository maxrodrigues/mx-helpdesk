<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomerIdColumnToReplies extends Migration
{
    public function up(): void
    {
        Schema::table('replies', function (Blueprint $table) {
            $table->foreignId('customer_id')
                ->nullable()
                ->after('user_id')
                ->constrained();
        });
    }
}
