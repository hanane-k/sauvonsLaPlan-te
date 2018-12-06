<?php

    function getVolonteers($db) {
        $req = $db->query("SELECT * FROM volonteer");
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function getVolonteer($id, $db) {
        $req = $db->prepare("SELECT * FROM volonteer WHERE ID = :ID");
        $result = $req->execute(["ID" => $id]);
        return $result;
    }

    function deleteVolonteer($id, $db) {
        $req = $db->prepare("DELETE FROM volonteer WHERE ID = :ID");
        $result = $req->execute(["ID" => $id]);
        return $result;
    }

    function insertUser($volonteer, $db) {
        $req = $db->prepare("INSERT INTO volonteer (name, firstname, age, comment, disponibility, street, city) VALUES(:name, :firstname, :age, :comment, :disponibility, :street, :city)");
        $result = $req->execute([
            "name" => $volonteer["name"],
            "firstname" => $volonteer["firstname"],
            "age" => $volonteer["age"],
            "comment" => $volonteer["comment"],
            "disponibility" => $volonteer["disponibility"],
            "street" => $volonteer["street"],
            "city" => $volonteer["city"]
        ]);
        return $result;
    }
?>