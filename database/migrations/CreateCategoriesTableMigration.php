<?php

use SigmaPHP\DB\Migrations\Migration;

class CreateCategoriesTableMigration extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        $this->createTable(
            'categories',
            [
                ['name' => 'id', 'type' => 'bigint', 'primary' => true],
                ['name' => 'version_id', 'type' => 'bigint'],
                ['name' => 'parent_id', 'type' => 'bigint'],
                ['name' => 'name', 'type' => 'varchar'],
                ['name' => 'timestamps']
            ]
        );
    }

    /**
     * @return void
     */
    public function down()
    {
        $this->dropTable('categories');
    }
}
