<?php  

class CountriesHelper extends AppHelper {
	
	var $helpers = array('Form');
	
	function dial_codes($dial_codes) {
		$location_info = $this->__getClientCountry();
		$ip = $location_info['HostipLookupResultSet']['FeatureMember']['Hostip']['ip'];
		$city = $location_info['HostipLookupResultSet']['FeatureMember']['Hostip']['name'];
		$country = $location_info['HostipLookupResultSet']['FeatureMember']['Hostip']['countryName'];
		$iso = $location_info['HostipLookupResultSet']['FeatureMember']['Hostip']['countryAbbrev'];
		return $this->Form->input('dial_code', array('type' => 'select', 'selected' => $iso, 'options' => $dial_codes, 'class' => 'countries_dropdown', 'div' => array('class' => 'Cellphone')));
	}
	
	private function __getClientCountry() {
        $xml = file_get_contents('http://api.hostip.info/get.XML');
		$xmlToArray = $this->__parse_xml($xml);
		return $xmlToArray;
		
    }
    
    private function __parse_xml($xml) {
		App::import('Xml');
		$parsed_xml = & new XML($xml);
		$parsed_xml = Set::reverse($parsed_xml);  // reversing the xml to array. this can be also used to convert an array to xml also.
		return $parsed_xml;
	}
}

?>