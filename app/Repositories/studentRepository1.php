<?php

namespace App\Repositories;
use App\Models\Student;

class studentRepository1 implements studentInterface {
     
    public function all()
    {
        return student::get();
    }

    public function get($id) {
        return student::find($id);
    }
 
    public function store(array $data)
    {
        return Student::create($data);
    }
    
    public function update($id, array $data)
    {
        return Student::find($id)->update($data);
    }
 
    public function delete($id)
    {
        return Student::find($id)->delete();

    }

}