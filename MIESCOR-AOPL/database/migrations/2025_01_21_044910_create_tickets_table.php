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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fullname');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('alt_email');
            $table->string('property_owner');
            $table->string('address1');
            $table->string('address2');
            $table->string('address_city');
            $table->string('type_of_activity');
            $table->string('scope');
            $table->string('remarks');
            $table->date('field_inspection_date');
            $table->string('neares_pole');
            $table->string('tags');
            $table->string('public_status');
            $table->string('status');
            $table->date('date_last_transition');
            $table->integer('rev_count');
            $table->string('PLOC_signatory');
            $table->string('PLOC_signatory_position');
            $table->string('PLOC_signatory_office');
            $table->date('PLOC_approval_date');
            $table->date('PLOC_expiration_date');
            $table->string('reference');
            $table->string('color');
            $table->date('due_date');
            $table->date('start_date');
            $table->string('assignee');
            $table->string('assigned_group');
            $table->string('other_assignees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
