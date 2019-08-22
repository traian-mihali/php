<?php

include_once 'employee.php';

 $dbname   = 'sql_hr';
 $username = 'traian';
 $password = '12345';
 $host = '127.0.0.1';

try {
    $employee = new Employee($host, $dbname, $username, $password);
    $employee->load(2);

    echo '<pre>';
    print_r($employee);
} catch (\PDOException $e) {
    // throw new \PDOException ($e -> getMessage(), (int)$e -> getCode()));
    // print($e -> getMessage()."\n ERROR CODE: ". (int)$e -> getCode());
    echo $e;
}
