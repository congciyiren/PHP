<?php
	$sex="MAN";
	$age=5000;

	if($sex=="MAN"){
		if($age>=60){
			echo "这个男士已退休".($age-60)."年了";
		}else{
			echo "这个男士还在工作,还有".(60-$age)."年才能退休";
		}
	}else{
		if($age>=55){
			echo "这个女士已退休".($age-55)."年了";
		}else{
			echo "这个女士还在工作,还有".(55-$age)."年才能退休";
		}
	}