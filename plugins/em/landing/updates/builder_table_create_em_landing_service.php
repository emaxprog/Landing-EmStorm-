<?php namespace Em\Landing\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\DB;

class BuilderTableCreateEmLandingService extends Migration
{
    public function up()
    {
        Schema::create('em_landing_service', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('caption')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->default(Db::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(Db::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('em_landing_service');
    }
}
