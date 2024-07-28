<?php

//TEST DOES THIS SHOW ON GITHUB

//This file will likely flip-flop between the PHP sections and the HTML to help me keep track of the chronology of the game.

$jackpot = 5000 //This number will count down by 30 for each second that the cheese takes.
$distance = 120 //The total distance of the slope. This number reduces by 10 each turn, making the game 12 turns long. 
$time = 0 //This number increases by randomized values each turn. Cheese is awarded for reaching the bottom in 60 seconds or fewer. 
$user_cheese = "" //Stores the type of cheese the user picked, the price of which will be used in the score calculations. 

?>


<b>Cheeseroller</b>
<p>
 "It's the new craze sweeping Neopia - buy your cheese from the cheese shop, and then see how fast you can run down a hill with it. It's that simple! If you manage to get down the hill in under a minute, you get to keep the cheese!"
<p>

<?php

//Shouldn't something here be $user_cheese?

<form action='cheeseroller.phtml' method='post'>
<b>Enter name of cheese</b>
<input type='text' name='cheese_name' size=20 maxlength=30>
<input type='submit' value='Submit'>
</form>


// Find the chosen cheese in the database. 

$user_cheese = $_POST["cheese"];
 $cheeseItem = Item::findBy(['name' => $user_cheese, 'type' => 'cheese']); 
  if (!$cheeseItem) {
	echo "Sorry, I don't have a cheese with that name.";
}

?>



<center>
	<p><b>DISTANCE TO FINISH LINE</b> : <? echo "${distance}m" ?>
	<br><b>TIME TAKEN</b> : <? echo "${time}s" ?> 

<p>


<!-- Dropdown menu for making your moves. -->

<form action='cheeseroller.php' method='post'> 
  <select name="options"> 
    <?php 
    $options = array("Forward Somersault", "Push Cheese Faster", "Hold Cheese Steady", "Dive Left", "Dive Right"); 
	foreach ($options as $choice) { 
      echo "<option value='$choice'>$choice</option>"; //THIS SAYS "OPTION" TOO MUCH. It's confusing. I want to change the name of the chosen option to "choice" instead but I'm not sure if I need to change ALL instances of "option" or if some of them need to be "option"
    } 
    ?> 
  </select> 
  
  <input type='submit' value='Go!'>
</form> 

</center>

<!-- This style of form I got from Neopets, and I was confused about how to get the $action function to recognize these values, but I should actually be able to just use the option strings instead, right?

<form action='cheeseroller.php' method='post'>
<select name='choice'>
<option value='1'>Forward Somersault
<option value='2'>Push Cheese Faster
<option value='3'>Hold Cheese Steady
<option value='4'>Dive Left
<option value='5'>Dive Right
</select>
-->


<?php

function action($choice) {
        if ($choice = "Forward Somersault") {
			$roll = rand(0, 4);
			return $roll;

        } elseif ($choice = "Push Cheese Faster") {
            //Random number between 5 and 9
			$roll = rand(4, 8);
            return $roll;
			
        } elseif ($choice = "Hold Cheese Steady") {
            //Random number between 9 and 13
			$roll = rand(8, 12);
            return $roll;
			
        } elseif ($choice = "Dive Left") {
            //Random number between 13 and 17
			$roll = rand(12, 16);
			return $roll;
			
        } else {
			$roll = rand(16, 20);
			return $roll;

        }
	}

//Array table that holds all possible results from the action() function. 
//Option 0 is a duplicate of Option 20 on purpose. Each choice shares the first and last choices with their neighbors. 

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
	);

//This should print the flavor text to the page. 
echo "You roll your cheese ".$results[$roll][1];

//This will be used for the mathy part. 
$results[$roll][0]

function math()
?>