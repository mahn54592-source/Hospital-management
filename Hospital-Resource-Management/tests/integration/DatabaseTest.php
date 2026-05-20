<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testDatabaseConnection()
    {
        $pdo = new PDO(
            "mysql:host=mysql;dbname=PatientCareSystem",
            "root",
            "root"
        );

        $this->assertInstanceOf(PDO::class, $pdo);
    }
}