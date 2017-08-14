<?php




$a = [3,56,8657,56756,567,5675,65,6756];
// @todo write a function which sorts any given array with numeric values (as for axample $a). 
// Do not use existing PHP implementations which would do this job in a single line, but make use of basic algorithmic structures. 
// code goes here
function insertSortFun(array $arlist) //uses the insertion sort function method for its easy and quick implemntation with small arrays
{   // step 1, loop through the array
	for($i=0;$i<count($arlist);$i++) 
	{ //step 2 call the variables to be used
		$val = $arlist[$i]; //call the array item according to the loop
		$j = $i-1;// call the perivous array item
		while($j>=0 && $arlist[$j] > $val)//loop to through slected values and compares the last value to the previous
		{
			$arlist[$j+1] = $arlist[$j]; //swaps the location of the values
			$j--; //to move back through the array
		}
		$arlist[$j+1] = $val; //optimized method to swap last value
	}
return $arlist;
}

print_r(insertSortFun($a));


function getCars($userVariable='Volvo')
{
	//$sql = 'SELECT * FROM cars WHERE type='.$userVariable.'"" ORDER BY name '.$userSort;
	$sql = 'SELECT * FROM cars WHERE type LIKE '.$userVariable.' ORDER BY name';
	
	//query $sql against the database ...
}
// @todo what kind of problems does this SQL statment bring? 
// 1)can't order or group proper properly depending on the database structure
// 2) WHERE's = "Equal to"  looks for the exact string, if the type is written wrong or even not capitlized properly the results will return null
// 3) by default the order by is asending so $userSort='ASC' is redundent and not needed, unless they want to choose descending
//@Please improve it as much as you can.



function getFormHTML($userInputValue){
	$html = '<form><input type="text" name="content" value="'.$userInputValue.'></form>';
	return $html;
}
// @todo what kind of problems does this function bring?
//can't get entire form without submit, 
//if you want to get the value of that form, needs to assign an id to the input type to target  it and get the value by using the .value
//there is 2 missing symbols to properly format the HTML after .$userInputValue.' there should be " /
// code goes here for correct html creation
function getFormHTML($userInputValue){
	$html = '<form action="/form-submit.php"><input type="text" name="content" id="getFormHTMLtxt" value="'.$userInputValue.'"/><input type="submit" value="submit" /></form>';
	return $html;
}
echo getFormHTML("a");



/**
 * @todo write a script
 * Using the PHP language, have the function SimpleAdding(num) add up all the numbers from 1 to num. For the test cases, the parameter num will be any number from 1 to 1000.
 */
function simpleAdding($num) {

	// code goes here
	$num = ($num*($num-1))/2; //  sum of sequncial numbers 
	return $num;

}
echo simpleAdding(fgets(fopen('php://stdin', 'r')));




/**
 * @todo write a method that returns the day of week for any given date between 1.1.1900 and 31.12.1999.
 * Do not use existing date functions in PHP, which would do this job in a single line. Please do only use some basic math operations.
 * The only information available for your function is that 1.1.1900 was a Monday.
 */
 
 function getDayofWeek($day, $month, $year){
 //mod 7
 // calculations should be done in three steps, how many years from 1900, then how many days from 1.1 from start of the year. then using mod 7 to get the day of the week
	//declare the variables to be used
	$ammountOfDaysInMonths = 0; 
	$dayOfWeek1 = ["Monday","Tuesday","Wednesday", "Thursday", "Friday","Saturday","Sunday"];
	$monthDays = [31,28,31,30,31,30,31,31,30,31,30,31];
	$monthDaysLeap = [31,29,31,30,31,30,31,31,30,31,30,31];//simplify the calculation needed if it is a leap year
	//calculate ammount of days in the years from 1900
	$yearDiff = $year - 1900;
	$leapYearCounter = floor($yearDiff/4);//to calculate for the leap year, Ceil is used since 1900 is a leap year instead of +1 so if 1900 is called, it wont add an extra year or day.
	$daysOfyear = $yearDiff*365+$leapYearCounter;
	//calculate the ammount of days in a month from beginning of chosen $year to given month
	 for ($i = 0; $i<$month-1; $i++)//loop through the month array to add the days
	 { //loop through the previous months and add their days
		if ($year %4 == 0)//check if it is a leap year
		{
		$ammountOfDaysInMonths = $ammountOfDaysInMonths + $monthDaysLeap[$i];
		}
		else
		{
		$ammountOfDaysInMonths = $ammountOfDaysInMonths + $monthDays[$i];
		}
	 }
	$totalDays = $ammountOfDaysInMonths + $daysOfyear + $day-1; //to avoid the offset because month doesnt start with zero
	$count = $totalDays %7; //this gets which day of the week it is by calling the index of the array $dayOfWeek1 in the next line
	
 	return $dayOfWeek=$dayOfWeek1[$count];
 }
echo getDayofWeek(10,8,2017);


