<?php

$results = array(
	array(11, "right into a low branch... SLAM!, that\'s going to cost you six seconds"), 															//Option 0
    array(0, "WHAT\'S THIS?! You teleported the next 10 meters in no time flat!"),																	//Option 1
    array(3, "and a freak gust of wind blows you down the hill... wow you saved at least one second there!"), 										//Option 2
	array(5, "... keep going, $active_pet_name is nearly there!"), 																					//Option 3
	array(9, "... and a big rock is jutting out of the ground to the left ... SLAM!!! - That's going to cost at least four more seconds"), 			//Option 4
	array(1, "hitting a rock the cheese bounces high in the air - wow its going much faster now, that saved you at least three seconds!!!"), 		//Option 5
	array(4, "... the audience roars with applause!"),																								//Option 6
	array(6, "the cheese bounces around as it rolls quickly down the slope!"), 																		//Option 7
	array(10, "... and the cheese gets stuck down a pothole.. uggh, that took 6 seconds to get it free :\("), 										//Option 8
	array(2, "$flavor_text_2"), 																													//Option 9
	array(4, "... good thing you avoided that low branch, eh?"), 																					//Option 10
    array(6, "... the cheese bounces merrily down the slope towards the finish line"), 																//Option 11
	array(9, "... and a big rock is jutting out of the ground to the right ... SLAM!!! - That\'s going to cost at least five more seconds"), 		//Option 12
	array(2, ".. and what a LUCKY BOUNCE. The cheese flies forward, saving you two seconds"), 														//Option 13
	array(5, "... and a big rock is jutting out of the ground to the right ... good thing you dived left!"), 										//Option 14
	array(7, "... and the cheese starts to wobble all over the place, $petname should have held it steady, thats going to cost 3 seconds!"), 		//Option 15
	array(11, "... and the cheese bounces off a rock and falls on the floor.. uggh, that took 6 seconds to get it rolling again :\("), 				//Option 16
	array(3, "$flavor_text_3"), 																													//Option 17
	array(5, "and the cheese rolls faster and faster towards the goal!"), 																			//Option 18
	array(8, "It\'s a hot day and the sticky cheese is causing it to roll slower, that\'s going to cut your time down by at least 2-4 seconds!"), 	//Option 19
	array(11, "right into a low branch... SLAM!, that\'s going to cost you six seconds"), 															//Option 20
	array(0, "WHAT\'S THIS?! You teleported the next 10 meters in no time flat!"), 																	//Option 21
	);


echo $results[$roll][0]."You roll your cheese ".$results[$roll][1];
?>