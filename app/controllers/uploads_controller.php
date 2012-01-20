<?php
class UploadsController extends AppController {

	var $name = 'Uploads';
	var $components = array('Uploader');

	function index() {
		$query = "SELECT * FROM `uploads` WHERE title LIKE '%'";
		$data = $this->Upload->query($query);
		/*$this->paginate('Upload');*/
		$this->set('uploads',$data);
	}
	
	function listview() {
		$query = "SELECT * FROM `uploads` WHERE title LIKE '%'";
		$data = $this->Upload->query($query);
		/*$this->paginate('Upload');*/
		$this->set('uploads',$data);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('upload', $this->Upload->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Upload->create();
			$this->data["Upload"]["uploadlink"] = 'uploadedstuff/'.$this->data["Upload"]["fileToUpload"]["name"];
			if ($this->Upload->save($this->data)) {
				if(!empty($this->data["Upload"]["title"]) && !empty($this->data["Upload"]["fileToUpload"])) {
					$this->Uploader->uploader($this->data["Upload"]["fileToUpload"]);
				}
				//$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid upload', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('The upload has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The upload could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for upload', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Upload->delete($id)) {
			$this->Session->setFlash(__('Upload deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Upload was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function search() {
		$title = $this->data['Upload']['title'];
		
		$query = "SELECT * FROM `uploads` WHERE title LIKE '%".$title."%'";
		$data = $this->Upload->query($query);
		/*$this->paginate('Upload');*/
		$this->set('uploads',$data);
	}
}
?>