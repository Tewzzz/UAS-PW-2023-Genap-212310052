<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use App\Models\Kuliner;
use App\Models\Homestay;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home', [
            "datatravel" => Travel::latest()->paginate(4),
            "datakuliner" => Kuliner::latest()->paginate(4),
            "datahomestay" => Homestay::latest()->paginate(4),
            "datadestinasi" => Destinasi::latest()->paginate(4),
        ]);
    }
}
