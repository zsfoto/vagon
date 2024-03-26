<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhotocategoriesPhotosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhotocategoriesPhotosTable Test Case
 */
class PhotocategoriesPhotosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PhotocategoriesPhotosTable
     */
    protected $PhotocategoriesPhotos;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.PhotocategoriesPhotos',
        'app.Photocategories',
        'app.Photos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PhotocategoriesPhotos') ? [] : ['className' => PhotocategoriesPhotosTable::class];
        $this->PhotocategoriesPhotos = $this->getTableLocator()->get('PhotocategoriesPhotos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PhotocategoriesPhotos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PhotocategoriesPhotosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PhotocategoriesPhotosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
