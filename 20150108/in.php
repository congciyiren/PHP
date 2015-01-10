<?php
	$os=array("Mac","NT","Trix","Linux");

	if(in_array("Trix", $ox)){
		echo "Got Trix";
	}

	if(in_array("Mac", $os)){
		echo "Got Mac";
	}

	$a = array('1.10' 12.4,1.13);

	if(in_array('12.4',$a,true)){
		echo "'12.4' found with strict check\n";
	}

	if(in_array(1.13,$a,true)){
		echo "1.13 found with strtict check\n";
	}

	$a=array(array('p','h'),array('p','r'),'o');

	if(in_array(array('p','h'), $a)){
		echo "'ph'was found\n";
	}