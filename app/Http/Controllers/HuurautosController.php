<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HuurautosController extends Controller
{
    public function index()
    {
        $data = DB::table('huurautos')
            ->select('automerk', 'autotype', 'autobouwjaar')  
            // ->whereIn('autobouwjaar', [2001, 2003, 2006, 2008, 2010, 2012, 2014, 2016, 2018, 2020])  
            ->orderBy('autobouwjaar', 'asc')
            ->orderBy('autotype', 'asc')
            ->get();
        // dd($data);
        return view('huurautos.index',['data'=>$data]);
    }

    public function create()
    {
        return view('huurautos.create');
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            // 'autonummer' => 'required|integer',
            'automerk' => 'required',
            'autotype' => 'required',
            'autobouwjaar' => 'required|integer|between:1900,2025',
        ]);
        if ($validator->fails()) {
            return redirect('huurautos/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
            DB::table('huurautos')->insert([
            // 'autonummer' => $request->autonummer,
            'automerk' => $request->automerk,
            'autotype' => $request->autotype,
            'autobouwjaar' => $request->autobouwjaar,
            ]);
            return redirect('/huurautos');
        }
        
        
    }

}
