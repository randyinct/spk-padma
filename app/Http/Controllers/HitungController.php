<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function perhitungan(Alternatif $alternatif){
        //ALTERNATIF
        $dataAlt = Alternatif::where('user_id', auth()->user()->id)->get();
        $rowsAlt = Alternatif::select('alternatif')->where('user_id', auth()->user()->id)->count();
        $altName = Alternatif::select('alternatif')->where('user_id', auth()->user()->id)->pluck('alternatif')->toArray();

        //KRITERIA
        $dataK = Kriteria::all();
        $rowsK = Kriteria::select('bobot')->count();
        $bobot = Kriteria::all()->pluck('bobot')->toArray();
        $sumKriteria = Kriteria::sum('bobot');
        $cb = Kriteria::all()->pluck('cost_benefit')->toArray();

        //jika data alternatif tidak kosong
        if($rowsAlt != 0)
        {
                //tabel normalisasi bobot kriteria
            for($i = 0; $i < $rowsK; $i++){
                $newBobot[$i] = $bobot[$i] / $sumKriteria;
            };

            $tkep = $newBobot;

            //TABEL BOBOT COST BENEFIT
            for ($i= 0; $i < $rowsK; $i++){
                if($cb[$i] == 'cost') // ketika cost_benefitnya = cost
                {
                    $pangkat[$i] = $tkep[$i] * (-1);
                }
                else // ketika cost_benefit = benefit
                {
                    $pangkat[$i] = $tkep[$i];
                }
            }
            

            // K1 / FIRST IMPRESSION ($fis)

            $dataK1 = $alternatif->select('k1')->where('user_id', auth()->user()->id)->pluck('k1')->toArray();

            
            $pK1 = $pangkat[0];
            for($i = 0 ; $i < $rowsAlt; $i++){
                $h1[$i] = pow($dataK1[$i], $pK1); 
            }
            
            $fis = $h1;
            

            //K2 / SERVICE ATTITUDE ($sas)

            $dataK2 = $alternatif->select('k2')->where('user_id', auth()->user()->id)->pluck('k2')->toArray();
            $pK2 = $pangkat[1];

            for($i = 0 ; $i < $rowsAlt; $i++){
                $h2[$i] = pow($dataK2[$i], $pK2); 
            }
            
            $sas = $h2;

            //K3 / WORK EXPERIENCES ($wes)


            $dataK3 = $alternatif->select('k3')->where('user_id', auth()->user()->id)->pluck('k3')->toArray();
            $pK3 = $pangkat[2];

            for($i = 0 ; $i < $rowsAlt; $i++){
                $h3[$i] = pow($dataK3[$i], $pK3); 
            }

            $wes = $h3;

            //K4 / salary requirement ($srs)

            $dataK4 = $alternatif->select('k4')->where('user_id', auth()->user()->id)->pluck('k4')->toArray();
            $pK4 = $pangkat[3];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h4[$i] = pow($dataK4[$i], $pK4);
            }

            $srs = $h4;

            

            //k5 / SUPERVISION EXPERIENCES ($sves)

            $dataK5 = $alternatif->select('k5')->where('user_id', auth()->user()->id)->pluck('k5')->toArray();
            $pK5 = $pangkat[4];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h5[$i] = pow($dataK5[$i], $pK5);
            }

            $sves = $h5;


            //K6 / FORMAL SCHOOL ($fss)

            $dataK6 = $alternatif->select('k6')->where('user_id', auth()->user()->id)->pluck('k6')->toArray();
            $pK6 = $pangkat[5];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h6[$i] = pow($dataK6[$i], $pK6);
            }

            $fss = $h6;


            //K7 / Training Program ($tps)

            $dataK7 = $alternatif->select('k7')->where('user_id', auth()->user()->id)->pluck('k7')->toArray();
            $pK7 = $pangkat[6];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h7[$i] = pow($dataK7[$i], $pK7);
            }

            $tps = $h7;


            //k8 / acvhievement orientation ($aos)

            $dataK8 = $alternatif->select('k8')->where('user_id', auth()->user()->id)->pluck('k8')->toArray();
            $pK8 = $pangkat[7];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h8[$i] = pow($dataK8[$i], $pK8);
            }

            $aos = $h8;


            //K9 / Concern For Order

            $dataK9 = $alternatif->select('k9')->where('user_id', auth()->user()->id)->pluck('k9')->toArray();
            $pK9 = $pangkat[8];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h9[$i] = pow($dataK9[$i], $pK9);
            }

            $cfos = $h9;


            //K10 / Relevant Knowledge

            $dataK10 = $alternatif->select('k10')->where('user_id', auth()->user()->id)->pluck('k10')->toArray();
            $pK10 = $pangkat[9];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h10[$i] = pow($dataK10[$i], $pK10);
            }

            $rks = $h10;


            // K11 / Relevant Skills ($rss)

            $dataK11 = $alternatif->select('k11')->where('user_id', auth()->user()->id)->pluck('k11')->toArray();
            $pK11 = $pangkat[10];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h11[$i] = pow($dataK11[$i], $pK11);
            }

            $rss = $h11;


            //K12 / English Skills

            $dataK12 = $alternatif->select('k12')->where('user_id', auth()->user()->id)->pluck('k12')->toArray();
            $pK12 = $pangkat[11];

            for($i=0; $i < $rowsAlt; $i++)
            {
                $h12[$i] = pow($dataK12[$i], $pK12);
            }

            $ess = $h12;


            // PERHITUNGAN VEKTOR S $hasilS = $fis[$i] * $sas[$i] * wes[$i] * srs[$i] * sves[$i] * $fss[$i] * $tps[$i] * $aos[$i] * cfos[$i] * $rks[$i] * $rss[$i] * $ess[$i]
            
            for($i=0; $i < $rowsAlt; $i++)
            {
                
                $hasilS[$i] = $fis[$i] * $sas[$i] * $wes[$i] * $srs[$i] * $sves[$i] * $fss[$i] * $tps[$i] * $aos[$i] * $cfos[$i] * $rks[$i] * $rss[$i] * $ess[$i];

            }
            
            $vektorS = $hasilS;

            $sumVektorS = array_sum($vektorS); // jumlah dari vektor S sebagai pembagi

            //PERHITUNGAN VEKTOR V
            for($i=0; $i < $rowsAlt; $i++)
            {
                $hasilV[$i] =  $vektorS[$i] / $sumVektorS;
            }
            
            $vektorV = $hasilV;

            $jumlahBobot = array_sum($bobot);
            $jumlahTkep = array_sum($tkep);
            $jumlahS = array_sum($vektorS); // JUMLAH VEKTOR S
            $jumlahV = array_sum($vektorV); // JUMLAH VEKTOR V

            return view('dashboard.hitung.index', compact('pangkat', 'tkep', 'rowsK', 'rowsAlt', 'vektorS', 'vektorV', 'altName', 'jumlahV', 'jumlahS', 'jumlahBobot', 'jumlahTkep'), [
                'dataK' => $dataK,
                'dataAlt' => $dataAlt
            ]);
        } 
        else {
            return view('dashboard.hitung.index', [
                'dataK' => $dataK,
                'dataAlt' => $dataAlt,
                'rowsAlt' => $rowsAlt,
            ]);

        }
 

    }
}
