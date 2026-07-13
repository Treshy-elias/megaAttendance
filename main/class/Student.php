<?php
include("../database/Connection.php");
include("../traits/StudentTrait.php");

class Student extends Connection
{
    use StudentTrait;

    public function register(string $name, string $department, string $email)
    {
        if (!$this->isValidEmail($email)) {
            return "Invalid Email";
        }


        $name = $this->formatStudentName($name);

        $sql = "INSERT INTO students(student_id,name,department,email)
                VALUES(?,?,?,?)";

        $stmt = $this->con->prepare($sql);

        $stmt->bind_param(
            "ssss",
            $studentCode,
            $name,
            $department,
            $email
        );

        return $stmt->execute();
    }
}
