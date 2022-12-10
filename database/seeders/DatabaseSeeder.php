<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
           'name' => 'Randy Aldy Ismail',
           'username' => 'admin',
           'password' => Hash::make('admin'),
           'email' => 'randyaldy16@gmail.com'
        ]);

        User::create([
           'name' => 'Padma Hotel',
           'username' => 'padma',
           'password' => Hash::make('padma'),
           'email' => 'padmahotel@gmail.com'
        ]);

        Alternatif::create([
            'alternatif' => 'Pelamar 1',
            'user_id' => '1',
            'k1' => '5',
            'k2' => '4',
            'k3' => '3',
            'k4' => '2',
            'k5' => '5',
            'k6' => '3',
            'k7' => '2',
            'k8' => '4',
            'k9' => '5',
            'k10' => '2',
            'k11' => '4',
            'k12' => '5',
        ]);

        Kriteria::create([
            'kode' => 'K1',
            'kriteria' => 'First Impression',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K2',
            'kriteria' => 'Service Attitude',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K3',
            'kriteria' => 'Work Experience',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K4',
            'kriteria' => 'Salary Requirement',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K5',
            'kriteria' => 'Supervision Experiences',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K6',
            'kriteria' => 'Formal School',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K7',
            'kriteria' => 'Training Program',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K8',
            'kriteria' => 'Achievement Orientation',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K9',
            'kriteria' => 'Concern for Order',
            'bobot' => '4',
            'cost_benefit' => 'benefit'  
        ]);

        Kriteria::create([
            'kode' => 'K10',
            'kriteria' => 'Relevant Knowledge',
            'bobot' => '4',
            'cost_benefit' => 'benefit'
            
        ]);

        Kriteria::create([
            'kode' => 'K11',
            'kriteria' => 'Relevant Skills',
            'bobot' => '4',
            'cost_benefit' => 'benefit'       
        ]);

        Kriteria::create([
            'kode' => 'K12',
            'kriteria' => 'English Skills',
            'bobot' => '4',
            'cost_benefit' => 'benefit'       
        ]);
    }
}
