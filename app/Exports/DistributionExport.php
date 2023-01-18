<?php

namespace App\Exports;
use App\Models\Distribution;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DistributionExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('distributions as d')
        ->join('tahfidz_houses as house', 'd.tahfidz_house_id', '=', 'house.id')
        ->join('batches', 'd.batch_id', '=', 'batches.id')
        ->select('house.name', 'house.address', 'house.contact', 'house.total_santri', 'house.total_santri_yatim', 'house.total_santri_dhuafa', 'batches.batch', 'd.total_rice',)
        ->where('d.deleted_at', null)
        ->get();
    }

    public function headings(): array
    {
        return [
            'Nama Pesantren',
            'Alamat',
            'No.Hp',
            'Jumlah Santri',
            'Jumlah Santri Dhuafa',
            'Jumlah Santri Yatim',
            'Batch',
            'Jumlah Beras'
        ];
    }

}
