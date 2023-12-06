
<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('category_id'); // Change to unsignedBigInteger for the foreign key
            $table->foreign('category_id')->references('id')->on('categories'); // Use 'categories' table name
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->boolean('availability')->default(1);
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
}
?>
