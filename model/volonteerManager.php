<?php
// get volonteers function
    function getVolonteers($db) {
        $req = $db->query("SELECT * FROM volonteer");
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
// get volonteers function
    function getVolonteer($id, $db) {
        $req = $db->prepare("SELECT * FROM volonteer WHERE ID = :ID");
        $req->execute(["ID" => $id]);
        $result = $req->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
// delete volonteer function
    function deleteVolonteer($id, $db) {
        $req = $db->prepare("DELETE FROM volonteer WHERE ID = :ID");
        $result = $req->execute(["ID" => $id]);
        return $result;
    }
// insert function
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
// update function
    function updateUser($form, $db) {
        $req = $db->prepare("UPDATE volonteer SET name = :name, firstname = :firstname, age = :age, comment = :comment, disponibility = :disponibility, street = :street, city = :city WHERE ID = :ID");
        $result = $req->execute([
            "name" => $form["name"],
            "firstname" => $form["firstname"],
            "age" => $form["age"],
            "comment" => $form["comment"],
            "disponibility" => $form["disponibility"],
            "street" => $form["street"],
            "city" => $form["city"],
            "ID" => $form["ID"]
        ]);
        return $result;
    }


    function sortedVolonteers($form, $db) {
        $sql = "SELECT * FROM volonteer";
        if (isset($form["order"]) && !empty($form["order"])) {
            $sql .= " ORDER BY " . $form["order"];
            // if ($db["city"] === $form["city"]) {
            //     $sql .= " WHERE city = ";
            //     $sql .= $db["city"];
            // }
        }
        $req = $db->query($sql);
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>