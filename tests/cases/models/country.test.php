<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Africa/Johannesburg' for 'SAST/2.0/no DST' instead in /Users/manulaptop/Sites/cake/cake/console/templates/default/classes/test.ctp on line 22
/* Country Test cases generated on: 2011-07-26 18:07:35 : 1311696095*/
App::import('Model', 'Countries.Country');

class CountryTestCase extends CakeTestCase {
	var $fixtures = array('plugin.countries.country');

	function startTest() {
		$this->Country =& ClassRegistry::init('Country');
	}

	function endTest() {
		unset($this->Country);
		ClassRegistry::flush();
	}

}
?>