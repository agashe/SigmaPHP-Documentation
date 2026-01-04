<?php

use SigmaPHP\DB\Migrations\Migration;

class CreateVersionsTableMigration extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        $this->createTable(
            'versions',
            [
                ['name' => 'id', 'type' => 'bigint', 'primary' => true],
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
        $this->dropTable('versions');
    }
}
