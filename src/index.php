<?php

include_once 'employee.php';

 $dbname   = 'sql_invoicing';
 $username = 'traian';
 $password = '12345';
 $host = '127.0.0.1';

try {
    $employee = new Employee($host, $dbname, $username, $password);
    $employee->load(1);

    echo '<pre>';
    // print_r($employee);
    // print_r((array)$employee);

    foreach ($employee as $key => $value) {
        echo $key.": ". $value."\n";
    }
} catch (\PDOException $e) {
    // throw new \PDOException ($e -> getMessage(), (int)$e -> getCode()));
    print($e -> getMessage()."\n ERROR CODE: ". (int)$e -> getCode());
}
