<?php
use Migrations\AbstractMigration;

class CreateDiscounts extends AbstractMigration
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
        $table = $this->table('discounts');
        $table->addColumn('discount_rate', 'float', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
