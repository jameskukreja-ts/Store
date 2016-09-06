<?php
use Migrations\AbstractMigration;

class CreateTiers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('tiers');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('lowerbound', 'integer', [
            'default' => 0,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('upperbound', 'integer', [
            'default' => 0,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('multiplier', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('point_limit', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->create();
    }
}
