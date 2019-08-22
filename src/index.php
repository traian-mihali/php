<?php

include_once 'employee.php';

$dbname   = 'sql_hr';
$username = 'traian';
$password = '12345';
try {
    $employee = new Employee($dbname, $username, $password);
    $employee->load(2);
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}

echo '<pre>';
print_r($employee);
