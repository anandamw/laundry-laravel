 <?php 
 use Illuminate\Database\Migrations\Migration;
 use Illuminate\Database\Schema\Blueprint;
 use Illuminate\Support\Facades\Schema;
 
 class CreateReviewsTable extends Migration
 {
     public function up()
     {
         Schema::create('reviews', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('user_id');
             $table->unsignedBigInteger('order_id');
             $table->text('review');
             $table->tinyInteger('rating')->unsigned();
             $table->timestamps();
 
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
         });
     }
 
     public function down()
     {
         Schema::dropIfExists('reviews');
     }
 }
 
 ?> 