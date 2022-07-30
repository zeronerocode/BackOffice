<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MembersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Member([
            'id'     => $row[0],
            'groupid'    => $row[1],
            'nama' => $row[2],
            'alamat' => $row[3],
            'hp' => $row[4],
            'email' => $row[5]
        ]);
    }
}
