<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MusicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MusicsTable Test Case
 */
class MusicsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MusicsTable
     */
    protected $Musics;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Musics',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Musics') ? [] : ['className' => MusicsTable::class];
        $this->Musics = TableRegistry::getTableLocator()->get('Musics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Musics);

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
