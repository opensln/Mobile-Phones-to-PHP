<?php

require 'connect.php';
session_start();

function logProg($value)
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function executeQuery($sql, $conditionsData)
{
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($conditionsData);
    $types = str_repeat('s', count($values)); //the amount of conditions will determine the amount of types.
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;

}

function selectAll($table, $conditions = [])
{

    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $data;
    } else {
        //return records that match the given conditions
        // $sql ="SELECT * FROM $table WHERE username ='Simon' AND admin=0";
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=?";
            } else { $sql = $sql . " AND $key=?";

            }
            $i++;
        }
        // logProg($sql);
        $stmt = executeQuery($sql, $conditions);
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $data;
    }

}

//SelectOne

function selectOne($table, $conditions)
{

    global $conn;

    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " WHERE $key=?";
        } else { $sql = $sql . " AND $key=?";

        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
    // logProg($sql);
    $stmt = executeQuery($sql, $conditions);
    $data = $stmt->get_result()->fetch_assoc();
    return $data;
}

//Create

function create($table, $data) {
    global $conn;

    //Query Format $Sql = "INSERT INTO mobiles SET model=?,brand=?,price=?,release_date=?,image=?,Front Cam=?,tech_link=?"

    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else { $sql = $sql . ", $key=?";

        }
        $i++;
    }
    // logProg($sql);
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

//Update  

function update($table, $id, $data) {
    global $conn;

    //logProg($data);

    //Query Format $Sql = "UPDATE mobiles SET model=?,brand=?,price=?,release_date=?,image=?,tech_link=? WHERE id=?"

    $sql = "UPDATE $table SET"; 

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else { $sql = $sql . ", $key=?";

        }
        $i++;
    }

    //logProg($sql);

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;

    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
}

function delete($table, $id) {
    global $conn;

    //Query Format $Sql = "DELETE FROM mobiles WHERE id=?"

    $sql = "DELETE FROM $table WHERE id=? "; 

    // logProg($sql);

    $stmt = executeQuery($sql, ['id' => $id]); //must be an array not a single object
    return $stmt->affected_rows;
}
