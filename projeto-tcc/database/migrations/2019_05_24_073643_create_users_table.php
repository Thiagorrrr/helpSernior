<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			
            $table->string('cpf', 11)->unique()->nullable();
			$table->string('name', 50);
			$table->char('phone', 11);
			$table->date('birth', 50)->nullable();
			$table->char('gender', 1)->nullable();
			$table->text('notes')->nullable();


			$table->string('rua', 150)->nullable();
			$table->string('cep', 50)->nullable();
			$table->string('numero', 50)->nullable();
			$table->string('municipio', 150)->nullable();
			$table->string('estado', 150)->nullable();


			$table->string('titular', 50)->nullable();
			$table->string('ncartao', 150)->nullable();
			$table->string('dtvalidade', 25)->nullable();
			$table->string('bandeira', 50)->nullable();
			$table->string('securycode', 25)->nullable();



			$table->string('cobranca', 50)->nullable();
			$table->string('funcao', 50)->nullable();
			$table->string('salario', 150)->nullable();
			
	
			$table->string('image')->nullable();
			$table->boolean('terms', 1)->nullable();
			
			$table->string('descri', 350)->nullable();

			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();

			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::table('users', function(Blueprint $table) {
	
		});
		Schema::drop('users');
	}
}
