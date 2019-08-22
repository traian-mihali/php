<?php

include_once 'employee.php';

$dbname   = 'sql_hr';
$username = 'traian';
$password = '12345';
try {
    $employee = new Employee($dbname, $username, $password);
    $employee->load(2);

    echo '<pre>';
    print_r($employee);
} catch (Exception $e) {
    print $e->getMessage() . "\n";
}
