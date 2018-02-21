<?php
/**
 * Created by PhpStorm.
 * User: SHABOSS
 * Date: 2/16/18
 * Time: 2:15 PM
 */


function connect()
{
    try {
//Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        echo 'Still Connected to database!<br>';
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}

function getStudents($sid)
{
    global $dbh;

//1. Define the query
    $sql = "SELECT * FROM student ORDER BY last, first";

//    echo "<br>the sql statement is <pre>";
//    var_dump($sql);
//    echo "</pre>";

//2. Prepare the statement
    $statement = $dbh->prepare($sql);

//3. Bind paramaters

//4. Execute the query
    $statement->execute();

//5. Get results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
    return $result;
}

function viewStudents($sid)
{
    global $dbh;

    //1. Define the query
    $sql = "SELECT * FROM student WHERE sid = :sid";

    //2. Prepare the statement
    $statement = $dbh->prepare($sql);

    //3. Bind parameters
    $statement->bindParam(':sid', $sid, PDO::PARAM_STR);

    //4. Execute the query
    $statement->execute();

    //5. Get the results
    $student = $statement->fetch(PDO::FETCH_ASSOC);
    $student1 = new Student($student['sid'], $student[first], $student[last],
        $student[gpa], $student[birthdate], $student[advisor]);

    //6. Return student
    return $student1;
}