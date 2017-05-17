<?php
namespace Album\Model;

class Album
{
	public $id;
	public $artist;
	public $title;

	// In order to work with zend-db's TableGateway class,
	// We need to implement the exchangeArray() method
	// This method copies the data from the provided array to our entity's properties.
	public function exchangeArray(array $data)
	{
		$this->id = !empty($data['id']) ? $data['id'] : null;
		$this->artist = !empty($data['artist']) ? $data['artist'] : null;
		$this->title = !empty($data['title']) ? $data['title'] : null;
	}
	
}


?>