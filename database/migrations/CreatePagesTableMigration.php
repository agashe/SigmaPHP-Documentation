<?php

use SigmaPHP\DB\Migrations\Migration;

class CreatePagesTableMigration extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        $this->createTable(
            'pages',
            [
                ['name' => 'id', 'type' => 'bigint', 'primary' => true],
                ['name' => 'category_id', 'type' => 'bigint'],
                ['name' => 'content', 'type' => 'text'],
                ['name' => 'tags', 'type' => 'text'],
                ['name' => 'timestamps']
            ]
        );

        // Support full-text search inside the documentation's pages
        $this->addIndex('pages', 'page_content_index', ['content'], 'fulltext');
    }

    /**
     * @return void
     */
    public function down()
    {
        $this->dropIndex('pages', 'page_content_index');

        $this->dropTable('pages');
    }
}
