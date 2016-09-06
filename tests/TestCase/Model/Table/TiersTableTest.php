<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiersTable Test Case
 */
class TiersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TiersTable
     */
    public $Tiers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tiers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tiers') ? [] : ['className' => 'App\Model\Table\TiersTable'];
        $this->Tiers = TableRegistry::get('Tiers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tiers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
