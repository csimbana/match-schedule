<?php
/******************************************************************************
Description: This program output a table containing pairs of employees and how often they have coincided in the office.
Date: October 31, 2021
Developer: Carlos Simbana
Mail: csimbana@gmail.com
*******************************************************************************/

class Schedule
{	
	// find pairs of employees
	function findMatch($teamMembers)
	{
		$names = array_keys($teamMembers);

		for ($count1 = 0; $count1 < count($names) - 1; $count1++){
			$personA = explode (",",$teamMembers[$names[$count1]]);
			
			for ($count2 = $count1 + 1; $count2 < count($names); $count2++){
	
				$personB = explode (",",$teamMembers[$names[$count2]]);
				$numberOfMatch = count(array_intersect($personA, $personB));
				
				echo $names[$count1]."-". $names[$count2] .": ". $numberOfMatch;
				echo ("<br>");	
			}	
		}
	}	
}

// Read file TXT
$filename = "schedule.txt";

// Get each names and hours in Array
$teamMembers = parse_ini_file($filename);

// Print data extract from file
var_dump($teamMembers);

// Create instance of class Schedule
$team = new Schedule;
		
$team->findMatch($teamMembers);

?>