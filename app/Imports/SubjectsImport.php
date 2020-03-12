<?php

namespace App\Imports;

use App\Models\Admin\Subject;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class SubjectsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function headingRow() : int{
        return 1;
    }
    public function model(array $row)
    {
        return new Subject([
            'name' => $row['ten'],
            'created_at' => Date::excelToDateTimeObject($row['created_at']),
        ]);
    }
}
