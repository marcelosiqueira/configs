<?php
class MapHelper extends Helper {
	var $helpers = array('Html');
	function displaymap($locations=false,$width=500,$height=500) {
		App::import('Vendor', 'GoogleMapAPI', array('file' => 'GoogleMapAPI.class.php'));
		$map = new GoogleMapAPI('map');
		$map->setAPIKey('ABQIAAAAvCbGW5EV-rEJpZP96-o0NxQ1SJ3zY01f5orEIl-iQQteZ6BtLxQEPgACixUBYnGKDDbCXFOnFTJ1JQ'); //http://localhost
		//$map->setAPIKey('ABQIAAAAXLCF42xBXv32nlZfAB1dWhScY9Muw2Tut-ujVhFiSZ9QGJaPvBTRBkzE6D3zL1tQY66UQIO4j6QCbQ'); //http://www.marcelosiqueira.com.br
		if($locations) {
			foreach($locations as $location) {
				$map->addMarkerByAddress( $location['address'],strip_tags($location['title']), $location['title']);  //adds address to showup in Map
			} 
		} else {
            $map->setCenterCoords(-96.67,40.8279);   // if no locations are passed in function, then focus on US
            $map->setZoomLevel(3);
        } 
		$map->setWidth($width);
		$map->setHeight($height);
		$map_content=$map->getHeaderJS().$map->getMapJS().$map->getMap();
		return $this->output($map_content);
	}
}
?>
