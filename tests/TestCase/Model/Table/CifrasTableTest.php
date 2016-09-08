<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CifrasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CifrasTable Test Case
 */
class CifrasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CifrasTable
     */
    public $Cifras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cifras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cifras') ? [] : ['className' => 'App\Model\Table\CifrasTable'];
        $this->Cifras = TableRegistry::get('Cifras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cifras);

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
