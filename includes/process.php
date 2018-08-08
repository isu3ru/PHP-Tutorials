<?php 

$districts = [
	'KNY' => 'Kandy',
	'CMB' => 'Colombo',
	'VUN' => 'Vavuniya',
	'ANU' => 'Anuradhapura',
	'MTL' => 'Matale',
	'GMP' => 'Gampaha'
];

echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;
if (array_key_exists('save_student', $_POST)) {
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $admission_number = $_POST['admission_number'];
    $age = $_POST['age'];
    $dateofbirth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $district = $_POST['district'];

    echo "Welcome {$first_name} {$last_name}!
    <br />Your admission number is {$admission_number}. 
    <br />You are {$age} years old. 
    <br />Your date of birth is {$dateofbirth}. 
    <br />You are from {$address}, {$districts[$district]}.";
}

if (array_key_exists('update_student', $_POST)) {
	echo "updating...";
}