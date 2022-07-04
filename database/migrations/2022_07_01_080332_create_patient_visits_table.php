<?php

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visits', function (Blueprint $table) {
            $table->id();
            $table->string('visit_no')->nullable();
            $table->string('visit_type')->nullable();
            $table->date('visit_date')->nullable();
            $table->tinyInteger('visit_status')->default(0)->comment('When completed the status will change');
            $table->text('description')->nullable();
            $table->foreignIdFor(Patient::class)->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(User::class)->nullable()->constrained()->comment('the user_id is the Doctor id in this table');
            $table->foreignId('created_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('updated_by_id')->nullable()->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_visits');
    }
};
