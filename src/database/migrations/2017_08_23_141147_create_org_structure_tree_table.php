<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrgStructureTreeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('org_structure_tree', function(Blueprint $table)
		{
			$table->increments('id')->comment('机构 id');
			$table->string('title', 100)->default('')->unique('uk_title')->comment('部门名称');
			$table->integer('parent_id')->unsigned()->default(0)->comment('父级 id');
			$table->string('relationship_path')->default('')->comment('机构隶属关系路径');
			$table->integer('order')->unsigned()->default(1)->comment('排序号');
			$table->string('concat')->default('')->comment('机构联系人');
			$table->string('concat_info')->default('')->comment('联系方式');
			$table->string('description', 2000)->default('')->comment('机构主要职责');
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
		Schema::drop('org_structure_tree');
	}

}
