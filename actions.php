<?php header("Access-Control-Allow-Origin:*");header('Access-Control-Max-Age:86400');header('Content-Type:application/json');
header("Access-Control-Allow-Methods:GET");if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");}$response=new stdClass;$rules=array();$rule=new stdClass;
//// define rules below

// ***************************************************************
// repeat for each rule
$rule->pathPattern = "/spl*";
$rule->apiPath = "https://actions.mcdegen.xyz:8444/mcswap-spl-config*";
$rules[] = $rule;
// ***************************************************************

/// output data
$response->rules=$rules;echo json_encode($response);exit();