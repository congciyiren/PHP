<?php
	include "session.class.php";

	print_r($_SESSION);
	echo '<br>';


	echo session_name().'='.session_id().'<br>';