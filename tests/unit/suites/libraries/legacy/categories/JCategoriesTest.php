<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Categories
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * Test class for JCategories.
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-12-14 at 12:52:29.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Categories
 * @since       3.2
 * @todo        JCategories::_load() does not work in the standard SQLite test environment
 */
class JCategoriesTest extends TestCaseDatabase
{
	/**
	 * @var    JCategories
	 * @since  3.2
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return  void
	 *
	 * @since   3.2
	 */
	public function setUp()
	{
		parent::setUp();

		// Add JApplication and JLanguage dependencies
		$this->saveFactoryState();
		JFactory::$language = $this->getMockLanguage();
		JFactory::$application = $this->getMockCmsApp();
	}

	/**
	 * Overrides the parent tearDown method.
	 *
	 * @return  void
	 *
	 * @see     \PHPUnit\Framework\TestCase::tearDown()
	 * @since   3.2
	 */
	protected function tearDown()
	{
		$this->restoreFactoryState();

		parent::tearDown();
	}

	/**
	 * Gets the data set to be loaded into the database during setup
	 *
	 * @return  PHPUnit_Extensions_Database_DataSet_CsvDataSet
	 *
	 * @since   3.2
	 */
	protected function getDataSet()
	{
		$dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet(',', "'", '\\');

		$dataSet->addTable('jos_categories', JPATH_TEST_DATABASE . '/jos_categories.csv');

		return $dataSet;
	}

	/**
	 * Tests JCategories::getInstance()
	 *
	 * @return  void
	 *
	 * @since   3.2
	 */
	public function testGetInstance()
	{
		$this->assertInstanceOf(
			'JCategories',
			JCategories::getInstance('Content')
		);
	}

	/**
	 * Tests JCategories::getInstance() returns the same instance regardless of the case of the extension parameter
	 *
	 * @return  void
	 *
	 * @since   3.7.0
	 */
	public function testGetInstanceWithDifferentCasing()
	{
		$instance = JCategories::getInstance('Content');

		$this->assertSame(
			$instance,
			JCategories::getInstance('content'),
			'JCategories::getInstance() should return the same instance regardless of the case of the extension parameter.'
		);
	}

	/**
	 * Tests JCategories::get()
	 *
	 * @return  void
	 *
	 * @since   3.2
	 */
	public function testGet()
	{
		$this->markTestSkipped('The _load() method does not work in the SQLite test environment.');

		$this->assertInstanceOf(
			'JCategoryNode',
			JCategories::getInstance('Content')->get()
		);
	}
}
