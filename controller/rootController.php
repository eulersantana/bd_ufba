<?php

Class rootController Extends baseController {

	public function index() {
		$this->registry->template->show('root');
	}
}

?>