<?php
	require('database.php');
	require('country_finder.php');
	require('people.php');
	$database = new Database();
	$people_manager = new People_manager('people');
	$country_finder = new Country_finder('world');
	$users = $people_manager->get_all_users();
	var_dump($users);
?>