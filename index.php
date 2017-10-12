<?php
	$date =  date('Y/m/d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	

	if (strtotime($date) > strtotime($tar))
	  echo "The Future";
	else if (strtotime($date) == strtotime($tar))
		echo "Oops";
	else
		echo "The Past";

	echo '<br>';
    echo "Positions of \"/\" in \$date: " . strpos($date, "/");

    echo '<br>';
    echo "Number of words in \$date: " . str_word_count($date);

    echo '<br>';
    echo "The length of \$date: " .  strlen($date);

    echo '<br>';
    echo "ASCII value of first character in \$date string: " . ord($date);

    echo '<br>';
    echo "Last 2 characters in \$date: " . substr($date, -2);



    echo '<br>';
    $array = explode("/", $date);
    print_r($array);

    echo '<br>';
    foreach ($year as $yr)
    {
    	echo ' '.$yr, ' : ', (date('L', strtotime("$yr-01-01")) ?  'yes' : 'no');
    }
    











	


?>
