<?php
	$mem= new Memcache;
	$mem->connect("localhost",11211);
	$mem->add("mystr","this is a memcache test!",MEMCACHE_COMPRESSED,3600);

	$mem->close();