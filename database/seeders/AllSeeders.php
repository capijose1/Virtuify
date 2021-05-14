<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AllSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'admin José',
            'nick' => 'capijose',
            'email' => 'admin@ucsp.edu.pe',
            'password' => Hash::make('admin'),
            'fullaccess' => 'yes',
        ]);
        $user1=User::create([
            'name' => 'usuario marcos',
            'nick' => 'marcos',
            'email' => 'marcos@ucsp.edu.pe',
            'password' => Hash::make('marcos'),
            'fullaccess' => 'no',
        ]);
    }
}
