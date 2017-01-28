<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{

    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('id', 'integer', [
            'autoIncrement' => true,
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('username', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 250,
            'null' => false,
        ]);
        $table->addColumn('status', 'integer', [
            'default' => null,
            'limit' => 6,
            'null' => false,
        ]);
        $table->addColumn('cpf', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('plan_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('birth_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'username',
        ], [
            'name' => 'USERNAME_INDEX',
            'unique' => true,
        ]);
        $table->addIndex([
            'cpf',
        ], [
            'name' => 'CPF_INDEX',
            'unique' => true,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
