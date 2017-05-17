<?php
namespace Album\Controller;

use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
	private $table;

	public function __construct(AlbumTable $table)
	{
		$this->table = $table;
	}

	// To retrieve albums from the model and pass them to the view. 
	public function indexAction()
	{
		return new ViewModel([
		    'albums' => $this->table->fetchAll()
		]);
		
	}

	public function addAction()
	{
	}

	public function editAction()
	{
	}

	public function deleteAction()
	{
	}

}
?>