<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::select('id','name','age','gender')->get();
    }
    public function headings(): array
    {
        return ['ID','Full Name', 'Age', 'Gender'];
    }
}
