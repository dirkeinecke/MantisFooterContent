<?php
class MantisFooterContentPlugin extends MantisPlugin {

	public function register() {
		$this->name = 'Mantis Footer Content';
		$this->description = 'Add text to the footer section.';

		$this->version = '1.0.0';
		$this->requires = array(
			'MantisCore' => '2.0.0'
		);

		$this->author = 'Dirk Einecke';
		$this->contact = 'dirk.einecke@gmail.com';
		$this->url = 'https://www.dirkeinecke.de';
	}

	public function hooks() {
		return array(
			'EVENT_LAYOUT_RESOURCES' => 'meta'
		);
	}

	public function meta($p_event) {
		$js = plugin_file('js/MantisFooterContent.js');
		return "<script type=\"text/javascript\" src=\"{$js}\"></script>";
	}

}
