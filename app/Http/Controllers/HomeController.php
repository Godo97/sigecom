<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $personArr = HomeController::getPersonCantMonths();
        $meses = HomeController::getLastSixMonths();
        //dd($meses);
        //dd($personArr);
        return view('home', compact('meses', 'personArr'));
    }

    function getLastSixMonths() {
        for ($i=0; $i < 6; $i++){
            $meses[] = date('M', strtotime("-$i month"));
        }
        $meses = array_reverse($meses);
        return $meses;
    }

    function getPersonCantMonths() {
        $persons = Persona::select('id', 'created_at')
            ->get()
            ->groupBy(function($date) {
                //return Carbon::parse($date->created_at)->format('Y'); // grouping by years
                return Carbon::parse($date->created_at)->format('m'); // grouping by months
            });
        $usermcount = [];
        $userArr = [];

        foreach ($persons as $key => $value) {
            $usermcount[(int)$key] = count($value);
        }

        for($i = 1; $i <= 6; $i++){
            $j = date('m', strtotime("-$i month"));
            if(!empty($usermcount[(int)$j])){
                $userArr[(int)$j] = $usermcount[(int)$j];
            }else{
                $userArr[(int)$j] = 0;
            }
        }
        $userArr = array_reverse($userArr);
        return $userArr;
    }
}
