<?php
   // Create an array and push on the names
   // of your closest family and friends
   $myBigFriends = array("Taylor Vixen");
   array_push($myBigFriends, "Sola Aoi");
   array_push($myBigFriends, "Maria Ozawa");
   array_push($myBigFriends, "August Ames");
   array_push($myBigFriends, "Fucking Name");
   array_push($myBigFriends, "Asshole Name");
   // Sort the list
   sort($myBigFriends);
   // Randomly select a winner!
   $theWinner = $myBigFriends[rand(0, count($myBigFriends))];
   // Print the winner's name in ALL CAPS
   print "The winner is " . strtoupper($theWinner);
?>

