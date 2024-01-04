<!-- Create an associative array representing a person with keys
'name', 'age', and 'occupation'. Populate the values with
appropriate information and display the entire array. -->
<?php
$person = array(
    "name"=> "Swornim Thapa",
    "age" => 21,
    "occupation" => "student",
);
echo "<pre>";
print_r($person);
echo "</pre>";

function createPerson($name , $age , $occupation){
    return array(
           "name" => $name,
           "age" => $age,
           "occupation" => $occupation,
    );
    
}
$person1 = createPerson("swornim thapa", 21, "student");
echo "<pre>";
print_r($person1);
echo "</pre>";

?>