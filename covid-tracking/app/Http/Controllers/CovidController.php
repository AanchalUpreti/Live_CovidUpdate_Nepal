<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function index()
    {
        // Retrieving Json Data
        $jsonData = file_get_contents("https://pomber.github.io/covid19/timeseries.json");
        $jsonData = json_decode($jsonData, true);
        $aData['data'] = [];
        // Counting the number of days in the Json File
        foreach ($jsonData as $key => $value) {
            $aData['data'][$key]['total_confirmed'] = 0;
            $aData['data'][$key]['total_recovered'] = 0;
            $aData['data'][$key]['total_deaths'] = 0;
            $days_count = count($value) - 1;
            $days_count_prev = $days_count - 1;
        }

        $aData['total_confirmed'] = 0;
        $aData['total_recovered'] = 0;
        $aData['total_deaths'] = 0;

        // Total Cases Calculation
        foreach ($jsonData as $key => $value) {
            $aData['data'][$key]['total_confirmed'] = $aData['data'][$key]['total_confirmed'] + $value[$days_count]['confirmed'];
            $aData['total_confirmed'] = $aData['total_confirmed'] + $value[$days_count]['confirmed'];
            $aData['data'][$key]['total_recovered'] = $aData['data'][$key]['total_recovered'] + $value[$days_count]['recovered'];
            $aData['total_recovered'] = $aData['total_recovered'] + $value[$days_count]['recovered'];
            $aData['total_deaths'] = $aData['total_deaths'] + $value[$days_count]['deaths'];
            $aData['data'][$key]['total_deaths'] = $aData['data'][$key]['total_deaths'] + $value[$days_count]['deaths'];
        }

        //Retrieve Nepal Districts
        $fetchDistricts = file_get_contents('https://data.nepalcorona.info/api/v1/districts');
        $aData['districts'] = json_decode($fetchDistricts);

        //Retrieve Nepal Districts Data
        $fetchDistData = file_get_contents('https://data.nepalcorona.info/api/v1/covid/summary');
        $aData['nepal_data'] = json_decode($fetchDistData);
//        dd($aDistricts);

//        foreach ($aDistricts as &$oDistrict) {
//            foreach ($aDisData->district->cases as $item) {
//                if ($oDistrict->id == $item->district) {
//                    $oDistrict->cases = $item->count;
//                }
//            }
//            foreach ($aDisData->district->recovered as $item) {
//                if ($oDistrict->id == $item->district) {
//                    $oDistrict->recovered = $item->count;
//                }
//            }
//            foreach ($aDisData->district->deaths as $item) {
//                if ($oDistrict->id == $item->district) {
//                    $oDistrict->deaths = $item->count;
//                }
//            }
//        }
        // Render page and pass data to view
        return view('index', compact('aData'));
    }

    public function json(Request $request)
    {
        $aData = [];


    }
}
