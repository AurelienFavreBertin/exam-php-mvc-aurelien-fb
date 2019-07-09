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

        redirectTo('students');
    }


    // Route: POST students/$id/edit
    public function update($id)
    {
        $student = Student::findOne($id);
        $student->setName($_POST['name']);
        $student->setEmail($_POST['email']);
        $student->update();

        redirectTo('students');
    }

    // Route: GET students/$id/delete
    public function delete($id)
    {
        $student = Student::findOne($id);
        $student->delete();

        redirectTo('students');
    }

}