<?php

namespace App\Http\Controllers\Admin;
use App\Client;
use App\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class HomeController
{
    public function index()
    {
    
    $client = Client::count();
    $employee = Employee::count();
    
    return view('home', compact('client', 'employee'));
	}
    
    //METHOD INI UNTUK MENG-GENERATE DATA ORDER 7 HARI TERAKHIR
    public function getChart()
    {
        //MENGAMBIL TANGGAL 7 HARI YANG TELAH LALU DARI TANGGAL HARI INI
        $start = Carbon::now()->subWeek()->addDay()->format('Y-m-d') . ' 00:00:01';
        //MENGAMBIL TANGGAL HARI INI
        $end = Carbon::now()->format('Y-m-d') . ' 23:59:00';
        
        //SELECT DATA KAPAN RECORDS DIBUAT DAN JUGA TOTAL PESANAN
        $client = Client::select(DB::raw('date(created_at) as client_date'), DB::raw('count(*) as total_client'))
            //DENGAN KONDISI ANTARA TANGGAL YANG ADA DI VARIABLE $start DAN $end 
            ->whereBetween('created_at', [$start, $end])
            //KEMUDIAN DI KELOMPOKKAN BERDASARKAN TANGGAL
            ->groupBy('created_at')
            ->get()->pluck('total_client', 'order_date')->all();
        
        //LOOPING TANGGAL DENGAN INTERVAL SEMINGGU TERAKHIR
        for ($i = Carbon::now()->subWeek()->addDay(); $i <= Carbon::now(); $i->addDay()) {
            //JIKA DATA NYA ADA 
            if (array_key_exists($i->format('Y-m-d'), $order)) {
                //MAKA TOTAL PESANANNYA DI PUSH DENGAN KEY TANGGAL
                $data[$i->format('Y-m-d')] = $order[$i->format('Y-m-d')];
            } else {
                //JIKA TIDAK, MASUKKAN NILAI 0
                $data[$i->format('Y-m-d')] = 0;
            }
        }
        return response()->json($data);
    }
}