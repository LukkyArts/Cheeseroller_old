<?php

//TEST DOES THIS SHOW ON GITHUB

$jackpot = 5000
$distance = 120
$time = 0
$user_cheese = ""

// First page of the game.

<b>Cheeseroller</b>
<p>
<? echo "It\'s the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It\'s that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!"; ?>
<p>

<form action='cheeseroller.phtml' method='post'>
<b>Enter name of cheese</b>
<input type='text' name='cheese_name' size=20 maxlength=30>
<input type='submit' value='Submit'>
</form>


?>



//Game page

<b>Cheeseroller</b>
<p>
<? echo "It\'s the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It\'s that simple!  If you manage to get down the hill in under a minute, you get to keep the cheese!"; 
?>
<p>

<center>
	<img src="${active_pet_img_url}" width="150" height="150" border="0">
	
	<img src='//images.neopets.com/items/med_cheese_0.gif' width=80 height=80 border=0>
	<br><img src='//images.neopets.com/medieval/cheese_slope.gif' width=300 height=100 border=0>

$user_cheese = $_POST["cheese"];
 $cheeseItem = Item::findBy(['name' => $user_cheese, 'type' => 'cheese']); 
 //If not(!) cheese item
  if (!$cheeseItem) {
	echo "Sorry, I don't have a cheese by that name!";
}


function action($choice) {
        if ($choice = 1) {
            //Pick a random number between 1-5
			$one = rand(1, 5);
				switch ($one) {
					case 1:
						$outcome = "WHAT\'S THIS?! You teleported the next 10 meters in no time flat!";
						$penalty = 0;
						break;
					case 2:
						$outcome = "and a freak gust of wind blows you down the hill... wow you saved at least one second there!";
						$penalty = 3;
						break;
					case 3:
						$outcome = "... keep going, $active_pet_name is nearly there!";
						$penalty = 5;
						break;
					case 4:
						$outcome = "... and a big rock is jutting out of the ground to the left ... SLAM!!! - That's going to cost at least four more seconds";
						$penalty = 9;
						break;
					case 5:
						$outcome = "hitting a rock the cheese bounces high in the air - wow its going much faster now, that saved you at least three seconds!!!";
						$penalty = 1;
						break;
				}
            return $outcome //Not sure what to return here? Can I return both variables?
			
        } elseif ($choice = 2) {
            //Random number between 5 and 9
			$two = rand(5, 9);
				switch ($two) {
					case 5:
						$outcome = "hitting a rock the cheese bounces high in the air - wow its going much faster now, that saved you at least three seconds!!!";
						$penalty = 1;
						break;
					case 6:
						$outcome = "... the audience roars with applause!";
						$penalty = 4;
						break;
					case 7:
						$outcome = "the cheese bounces around as it rolls quickly down the slope!";
						$penalty = 6;
						break;
					case 8:
						$outcome = "... and the cheese gets stuck down a pothole.. uggh, that took 6 seconds to get it free :(";
						$penalty = 10;
						break;
					case 9:
						$outcome = "$flavor_text_2";
						$penalty = 2;
						break;
            return //The chosen outcome
			
        } elseif ($choice = 3) {
            //Random number between 9 and 13
			$three = rand(9, 13);
				switch ($three) {
					case 9:
						$outcome = "$flavor_text_2";
						$penalty = 2;
						break;
					case 10:
						$outcome = "... good thing you avoided that low branch, eh?";
						$penalty = 4;
						break;
					case 11:
						$outcome = "... the cheese bounces merrily down the slope towards the finish line";
						$penalty = 6;
						break;
					case 12:
						$outcome = "... and a big rock is jutting out of the ground to the right ... SLAM!!! - That\'s going to cost at least five more seconds";
						$penalty = 9;
						break;
					case 13:
						$outcome = ".. and what a LUCKY BOUNCE. The cheese flies forward, saving you two seconds";
						$penalty = 2;
						break;
            return $outcome;
        } elseif ($choice = 4) {
            //Random number between 13 and 17
			$four = rand(13, 17);
				switch ($one) {
					case 13:
						$outcome = ".. and what a LUCKY BOUNCE. The cheese flies forward, saving you two seconds";
						$penalty = 2;
						break;
					case 14:
						$outcome = "... and a big rock is jutting out of the ground to the right ... good thing you dived left!";
						$penalty = 5;
						break;
					case 15:
						$outcome = "... and the cheese starts to wobble all over the place, $petname should have held it steady, thats going to cost 3 seconds!";
						$penalty = 7;
						break;
					case 16:
						$outcome = "... and the cheese bounces off a rock and falls on the floor.. uggh, that took 6 seconds to get it rolling again :(";
						$penalty = 11;
						break;
					case 17:
						$outcome = "$flavor_text_3";
						$penalty = 3;
						break;
            return $outcome
        } else {
            //Random number between 17 and 20
			$five = rand(17, 21);
				switch ($five) {
					case 17:
						$outcome = "$flavor_text_3";
						$penalty = 3;
						break;
					case 18:
						$outcome = "and the cheese rolls faster and faster towards the goal!";
						$penalty = 5;
						break;
					case 19:
						$outcome = "It\'s a hot day and the sticky cheese is causing it to roll slower, that\'s going to cut your time down by at least 2-4 seconds!";
						$penalty = 8;
						break;
					case 20:
						$outcome = "right into a low branch... SLAM!, that\'s going to cost you six seconds";
						$penalty = 11;
						break;
					case 21:
						$outcome = "WHAT\'S THIS?! You teleported the next 10 meters in no time flat!";
						$penalty = 0;
						break;
            return 
        }
    }	
}

	<p><b>DISTANCE TO FINISH LINE</b> : <? echo "${distance}m" ?>
	<br><b>TIME TAKEN</b> : <? echo "${time}s" ?> 
</center>
<p>
<center>
<form action='cheeseroller.phtml' method='post'>
<select name='choice'>
<option value='1'>Forward Somersault
<option value='2'>Push Cheese Faster
<option value='3'>Hold Cheese Steady
<option value='4'>Dive Left
<option value='5'>Dive Right
</select>

<input type='submit' value='Go!'>
</center>

<br clear="all">

                                        
                </td>
            </tr>
        </table>
    </div>
	
	
?>