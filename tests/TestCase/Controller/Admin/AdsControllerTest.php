<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\AdsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\AdsController Test Case
 */
class AdsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ads',
        'app.users',
        'app.sexes',
        'app.articles',
        'app.comments',
        'app.user_images',
        'app.user_messages',
        'app.type_ads',
        'app.towns',
        'app.ad_images',
        'app.ad_messages'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
