<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include '../../cli.php';

$db = $application->getBootstrap()->getResource('db');

try
{
    $db->query('TRUNCATE TABLE amazonproducts');
}
catch(Exception $e)
{
    echo $e->getMessage();
}

echo 'Database Cleared';
?>
