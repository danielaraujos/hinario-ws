<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HinosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HinosTable Test Case
 */
class HinosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HinosTable
     */
    public $Hinos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hinos',
        'app.autores',
        'app.indices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Hinos') ? [] : ['className' => 'App\Model\Table\HinosTable'];
        $this->Hinos = TableRegistry::get('Hinos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hinos);

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
}
