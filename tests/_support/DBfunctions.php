<?php

use phpDocumentor\Reflection\Types\Null_;
use Codeception\Lib\Interfaces\Db;

class DBfunctions extends \AcceptanceTester
{
    private function connectToDB($dbName)
    {
        $_rDb = mysqli_connect('pop703qatrial.cvbonft0novs.eu-west-1.rds.amazonaws.com', 'marsapplicant', 'Mars@trivago2018', $dbName);
        if (mysqli_connect_errno()) {
            var_dump("Connection failed: %s\n", mysqli_connect_error());
            exit();
        }
        return $_rDb;
    }

    private function fetchResults($query)
    {
        $resultQuery = mysqli_stmt_get_result($query);
        $_aRows = array();

        while ($_iRow = $resultQuery->fetch_assoc()) {

            $_aRows[] = $_iRow;

        };

        return $_aRows;
    }

    private function closeDB($connection)
    {
        mysqli_close($connection);
    }


}