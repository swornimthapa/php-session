<!-- $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
Create a PHP script which displays the capital and country name
from the above array $ceu. Sort the list by the capital of the
country.
Sample Output :
The capital of Netherlands is Amsterdam
The capital of Greece is Athens
The capital of Germany is Berlin -->
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" =>
"Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;


echo '<pre>';
print_r($ceu);
echo '</pre>';
$keys = array_keys($ceu);
for($i=0; $i<count($ceu)-1;$i++){
    for($j=0;$j<count($ceu)-1-$i;$j++){
        $keys = array_keys($ceu);
        if($ceu[$keys[$j]]>$ceu[$keys[$j+1]]){
                $deletedElement1 = array_splice($ceu,$j,1);
                $deletedElement2 = array_splice($ceu,$j,1);
                $bignning=array_slice($ceu ,0 ,$j);
                $lastarray =  array_slice($ceu,$j,count($ceu)); 
                $final = array_merge($bignning,$deletedElement2,$deletedElement1,$lastarray);
                $ceu = $final;
        }
    }
}
echo "<h2>Sorting the list by the capital of the country.</h1>";
echo "<br>";
echo "<br>";

foreach($ceu as $city => $capital){
    echo "The capital of ",$city," is ",$capital;
    echo "<br>";
}

// $j=4;
// $deletedElement1 = array_splice($ceu,$j,1);
// echo '<pre>';
// print_r($deletedElement1);
// echo '</pre>';
// $deletedElement2 = array_splice($ceu,$j,1);
// echo '<pre>';
// print_r($deletedElement2);
// echo '</pre>';
// $bignning=array_slice($ceu ,0 ,$j);
// echo '<pre>';
// print_r($bignning);
// echo '</pre>';
// $lastarray =  array_slice($ceu,$j,count($ceu)); 
// echo '<pre>';
// print_r($lastarray);
// echo '</pre>';
// // $newarray1 = array_merge($bignning,$deletedElement2);
// // $newarray2 = array_merge($deletedElement1,$lastarray);
// $final = array_merge($bignning,$deletedElement2,$deletedElement1,$lastarray);
// echo '<pre>';
// print_r($final);
// echo '</pre>';
// $ceu = $final;
// echo '<pre>';
// print_r($ceu);
// echo '</pre>';
?>