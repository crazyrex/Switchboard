<?php
/*
   Copyright 2012 KeepSafe Software Inc.

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

require_once("SwitchboardConfig.php");

$returnArray = array(
	//path to this file
	'updateServerUrl' => UPDATE_SERVER_URL,
	
	//path to SwitchboardDriver.php file where the actual dynamic config is generated
	'mainServerUrl' => MAIN_SERVER_URL
);

header('Content-type: application/json');
echo json_encode($returnArray);
?>