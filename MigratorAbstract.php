<?php

abstract class MigratorAbstract extends WireData implements Module {
	
	// required by "Module" class
	public function init() {
		
	}
	
	// defines that this function is required to be included into each MigratorClass
	abstract function convertToJson($src);

}