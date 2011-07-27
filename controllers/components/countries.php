<?php  

class CountriesComponent extends Object {

	function initialize($controller, $settings) {
    	$this->Controller =& $controller;
	}

	function get_dial_codes() {
		$this->Controller->loadModel('Country');
		$options = array(
			'fields' => array('Country.iso', 'Country.dial_code','Country.printable_name'),
			'conditions' => array('Country.dial_code !=' => 0)
			
		);
		$dial_codes = $this->Controller->Country->find('all', $options);
		$dial_codes = Set::combine($dial_codes, '{n}.Country.iso', array('+{0} {1}', '{n}.Country.dial_code', '{n}.Country.printable_name'));
		return $dial_codes;
	}

}

?>