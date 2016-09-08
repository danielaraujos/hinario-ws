<?php
use Migrations\AbstractMigration;

class Bd extends AbstractMigration
{
    public function up()
    {

        $this->table('cifras')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('tone', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('compass', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->create();

        $this->table('hinos')
            ->addColumn('name', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('indices_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $this->table('indices')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 120,
                'null' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->dropTable('cifras');
        $this->dropTable('hinos');
        $this->dropTable('indices');
        $this->dropTable('users');
    }
}
