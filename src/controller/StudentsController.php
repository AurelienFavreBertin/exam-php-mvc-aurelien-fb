<?php


class StudentsController {


    public function list() {

        $students = Student::findAll();

        view('students.list', compact('students'));
    }

    public function add() {

        view('students.add');
    }

    public function save() {

        $student = new Student;
        $student->setName($_POST['name']);
        $student->setEmail($_POST['email']);
        $student->save();

        redirectTo('student');
    }

}