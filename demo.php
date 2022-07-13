<?php
	$m = new MongoDB\Client('mongodb://localhost:27017');
		$db=$m->Salary;
		$collection=$db->accountant;
		$res=$collection->find(array("name"=>$_POST["username"]));
		foreach($res as $r)
	
	echo $res;

	
?>