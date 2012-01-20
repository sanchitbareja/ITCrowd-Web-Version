<?php
class UploadcommentsController extends AppController {

	var $name = 'Uploadcomments';

	function index() {
		$this->Uploadcomment->recursive = 0;
		$this->set('uploadcomments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid uploadcomment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('uploadcomment', $this->Uploadcomment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Uploadcomment->create();
			//print_r($this['params']['controller']);
			/*if($this['params']['controller'] == 'uploads'){
				$this->data['Uploadcomments']['upload_id'] = $this->data['params']['pass'][0];
			}*/
			if ($this->Uploadcomment->save($this->data)) {
				$this->Session->setFlash(__('Your comment has been saved', true));
				$this->redirect(array('controller' => 'uploads', 'action'=>'view',$this->data['Uploadcomment']['upload_id']));
			} else {
				$this->Session->setFlash(__('Your comment could not be saved. Please, try again.', true));
				$this->redirect(array('controller' => 'uploads', 'action'=>'view',$this->data['Uploadcomment']['upload_id']));
			}
		}
		$uploads = $this->Uploadcomment->Upload->find('list');
		$this->set(compact('uploads'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid uploadcomment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Uploadcomment->save($this->data)) {
				$this->Session->setFlash(__('The uploadcomment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uploadcomment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Uploadcomment->read(null, $id);
		}
		$uploads = $this->Uploadcomment->Upload->find('list');
		$this->set(compact('uploads'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for uploadcomment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Uploadcomment->delete($id)) {
			$this->Session->setFlash(__('Uploadcomment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Uploadcomment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>