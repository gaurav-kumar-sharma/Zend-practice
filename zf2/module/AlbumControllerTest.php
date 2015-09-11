<?php
require_once 'module/Album/src/Album/Controller/AlbumController.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * AlbumController test case.
 */
class AlbumControllerTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var AlbumController
	 */
	private $AlbumController;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated AlbumControllerTest::setUp()
		
		$this->AlbumController = new AlbumController(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated AlbumControllerTest::tearDown()
		$this->AlbumController = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests AlbumController->indexAction()
	 */
	public function testIndexAction() {
		// TODO Auto-generated AlbumControllerTest->testIndexAction()
		$this->markTestIncomplete ( "indexAction test not implemented" );
		
		$this->AlbumController->indexAction(/* parameters */);
	}
	
	/**
	 * Tests AlbumController->addAction()
	 */
	public function testAddAction() {
		// TODO Auto-generated AlbumControllerTest->testAddAction()
		$this->markTestIncomplete ( "addAction test not implemented" );
		
		$this->AlbumController->addAction(/* parameters */);
	}
	
	/**
	 * Tests AlbumController->editAction()
	 */
	public function testEditAction() {
		// TODO Auto-generated AlbumControllerTest->testEditAction()
		$this->markTestIncomplete ( "editAction test not implemented" );
		
		$this->AlbumController->editAction(/* parameters */);
	}
	
	/**
	 * Tests AlbumController->deleteAction()
	 */
	public function testDeleteAction() {
		// TODO Auto-generated AlbumControllerTest->testDeleteAction()
		$this->markTestIncomplete ( "deleteAction test not implemented" );
		
		$this->AlbumController->deleteAction(/* parameters */);
	}
	
	/**
	 * Tests AlbumController->getAlbumTable()
	 */
	public function testGetAlbumTable() {
		// TODO Auto-generated AlbumControllerTest->testGetAlbumTable()
		$this->markTestIncomplete ( "getAlbumTable test not implemented" );
		
		$this->AlbumController->getAlbumTable(/* parameters */);
	}
}

