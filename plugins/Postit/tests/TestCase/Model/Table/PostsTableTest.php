<?php
namespace Posts\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Posts\Model\Table\PostsTable;

/**
 * Posts\Model\Table\PostsTable Test Case
 */
class PostsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Posts\Model\Table\PostsTable
     */
    public $Posts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.posts.posts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Posts') ? [] : ['className' => 'Posts\Model\Table\PostsTable'];
        $this->Posts = TableRegistry::get('Posts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Posts);

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
