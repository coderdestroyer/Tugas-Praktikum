<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff :: factory(5)->create();
        // Staff::create([
        //     'nip' => '231402092',
        //     'email' => 'ferdyan@gmail.com',
        //     'nama' => 'Ferdyan Darwis',
        //     'tanggal_lahir' => '2005-09-22',
        //     'no_hp' => '085261565258'
        // ]);
    }

    
}
