<?php

namespace App\Dao\Student;

use App\Models\Student;
use App\Contracts\Dao\Student\StudentDaoInterface;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;

/**
 * Data accessing object for hotel
 */
class StudentDao implements StudentDaoInterface
{
    /**
     * To get hotel
     * @return hotels
     */
    public function getStudent() {
        $student = Student::orderBy('id', 'asc')->get();
        return $student;
    }

    /**
     * To import hotel
     * @return imported data
     */
    public function importStudent($request) {
        Excel::import(new StudentImport,$request->file('file')); 
        return 'imported';        
    }

}