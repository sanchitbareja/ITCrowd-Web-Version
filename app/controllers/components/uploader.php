<?php

class UploaderComponent extends Object {
	var $components = array('Session');
	var $uses = array();
	
	function uploader($imageData) {
		if(!empty($imageData)) {
			$uploads_dir = 'uploadedstuff/'.$imageData["name"];
			//print_r($imageData);
			//print_r($uploads_dir);
			if($imageData["error"] == 0) {
				move_uploaded_file($imageData["tmp_name"],$uploads_dir);
				$this->Session->setFlash('Upload was successful!');
			}
			//else {
				//$this->Session->setFlash('Upload was unsuccessful as there was an error. Please try again.');
			//}
		}
		//else {
		//	$this->Session->setFlash('One of the fields have not been filled up! Please fill that up and try again.');
		//}
	}
}

?>