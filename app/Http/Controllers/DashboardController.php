<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $dataFeed = new DataFeed();

            date_default_timezone_set('Asia/Jakarta');

            if(date('H')>=5 && date('H')<=11){
                $salam = 'Pagi';
            }elseif(date('H')>=12 && date('H')<=14){
                $salam = 'Siang';
            }elseif(date('H')>=15 && date('H')<=17){
                $salam = 'Sore';
            }elseif(date('H')>=18 && date('H')<=24){
                $salam = 'Malam';
            }else{
                $salam = 'Malam';
            }

            return view('pages.dashboard.dashboard', compact('dataFeed'), ['salam' => $salam]);
        }
    }
