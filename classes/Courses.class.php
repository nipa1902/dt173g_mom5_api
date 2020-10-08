<?php

class Courses {

    private $conn;
    private $table_name = "dt173g_courses";

    public $id;
    public $code;
    public $name;
    public $progression;
    public $courseplan;

    function __construct($db) {
        $this->conn = $db;
    }


    // Get all posts
    public function getAll() {

        $query = "SELECT * FROM " . $this->table_name . "";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Get one post by ID
    public function getOne($id) {

        $query = "SELECT * FROM " . $this->table_name . " where ID=$id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Delete a course
    public function deleteOne($id) {
        $query = "DELETE FROM " . $this->table_name . " where ID=$id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        // Check for affected rows and return accordingly
        if ($stmt->rowCount() > 0) {
            return $stmt;
        } else {
            return false;
        }
    }

    // Create a course
    public function createCourse() {
        $query = "INSERT INTO " . $this->table_name . 
        " SET code=:code, name=:name, progression=:progression, courseplan=:courseplan";

        $stmt = $this->conn->prepare($query);

        // Sanitize the input
        $this->code=htmlspecialchars(strip_tags($this->code));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->progression=htmlspecialchars(strip_tags($this->progression));
        $this->courseplan=htmlspecialchars(strip_tags($this->courseplan));

        // Bind sanitised inputs to prepared statement
        $stmt->bindParam(":code", $this->code);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":progression", $this->progression);
        $stmt->bindParam(":courseplan", $this->courseplan);

        // Try to execute
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Update course
    public function updateCourse() {

        $query = "UPDATE " . $this->table_name . 
        " SET code=:code, name=:name, progression=:progression, courseplan=:courseplan
        WHERE 
        id = :id";

        $stmt = $this->conn->prepare($query);

        // Sanitize the input
        $this->code=htmlspecialchars(strip_tags($this->code));
        $this->name=htmlspecialchars(strip_tags($this->name));
        $this->progression=htmlspecialchars(strip_tags($this->progression));
        $this->courseplan=htmlspecialchars(strip_tags($this->courseplan));
        $this->id=htmlspecialchars(strip_tags($this->id));

        // Bind sanitised inputs to prepared statement
        $stmt->bindParam(':code', $this->code);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':progression', $this->progression);
        $stmt->bindParam(':courseplan', $this->courseplan);
        $stmt->bindParam(':id', $this->id);

        // Try to execute
        if($stmt->execute()) {
            return true;
        } else {
            return false;
        }

    }



}

?>