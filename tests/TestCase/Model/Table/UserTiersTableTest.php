<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserTiersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserTiersTable Test Case
 */
class UserTiersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserTiersTable
     */
    public $UserTiers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_tiers',
        'app.users',
        'app.transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserTiers') ? [] : ['className' => 'App\Model\Table\UserTiersTable'];
        $this->UserTiers = TableRegistry::get('UserTiers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserTiers);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test calculate method
     *
     * @return void
     */
    public function testCalculate()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test newYear method
     *
     * @return void
     */
    public function testNewYear()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
