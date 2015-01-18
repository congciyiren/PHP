<?php

	class Timer{
		private $startTime = 0;
		private $stopTime = 0;

		function start(){
			$this->startTime =microtime(ture);
		}

		function stop(){
			$this->stopTime = microtime(ture);
		}

		function spent(){
			return round(($this->stopTime- $this->startTime),4);
		}
	}

	$timer = new Timer();
	$timer->start();
	usleep(1000);
	$timer->stop();

	echo "执行该脚本用时<b>".$timer->spent()."</b>秒";