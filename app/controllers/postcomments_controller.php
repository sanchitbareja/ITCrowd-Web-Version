<?php
class PostcommentsController extends AppController {

	var $name = 'Postcomments';

	function index() {
		$this->Postcomment->recursive = 0;
		$this->set('postcomments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid postcomment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('postcomment', $this->Postcomment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Postcomment->create();
			if ($this->Postcomment->save($this->data)) {
				$this->Session->setFlash(__('The postcomment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postcomment could not be saved. Please, try again.', true));
			}
		}
		$posts = $this->Postcomment->Post->find('list');
		$this->set(compact('posts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid postcomment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Postcomment->save($this->data)) {
				$this->Session->setFlash(__('The postcomment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The postcomment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Postcomment->read(null, $id);
		}
		$posts = $this->Postcomment->Post->find('list');
		$this->set(compact('posts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for postcomment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Postcomment->delete($id)) {
			$this->Session->setFlash(__('Postcomment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Postcomment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>