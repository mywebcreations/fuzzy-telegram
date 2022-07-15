<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class NewDatabase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    // public function change(): void
    // {

    // }

    public function up()
    {
        $table = $this->table('my_quotes', array('id'=>false, 'primary_key'=>array('quote_id')));
        $table->addColumn('quote_id', 'string', array('limit'=>32))
              ->addColumn('created', 'datetime')
              ->addColumn('category', 'string', array('limit'=>32))
              ->addColumn('json_blurb', 'text')
              ->create();
    }
    
    public function down()
    {
        $this->dropTable('my_quotes');

    }
}