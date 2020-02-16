<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TmpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TmpTable Test Case
 */
class TmpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TmpTable
     */
    protected $Tmp;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Tmp',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tmp') ? [] : ['className' => TmpTable::class];
        $this->Tmp = TableRegistry::getTableLocator()->get('Tmp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Tmp);

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
