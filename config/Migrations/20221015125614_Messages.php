<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Messages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('subject', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => '',
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('body', 'text', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('agr_1', 'text', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('agr_2', 'text', [
            'default' => '',
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
        ]);
        $table->create();
    }
}
