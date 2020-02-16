<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaydatasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaydatasTable Test Case
 */
class PlaydatasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaydatasTable
     */
    protected $Playdatas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Playdatas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Playdatas') ? [] : ['className' => PlaydatasTable::class];
        $this->Playdatas = TableRegistry::getTableLocator()->get('Playdatas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Playdatas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
