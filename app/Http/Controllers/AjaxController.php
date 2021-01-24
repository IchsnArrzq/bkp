<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Tipe,Kode,Skor};
use Illuminate\Support\Facades\DB;
class AjaxController extends Controller
{
    public function tipeGet($id)
    {
        $get = DB::table('tipes')->where('id',$id)->get();
        return json_encode($get);
    }
    public function kodeGet($id)
    {
        $get = DB::table('kodes')->where('tipe_id',$id)->get();
        return json_encode($get);
    }
    public function skorGet($id)
    {
        $get = DB::table('skors')->where('kode_id',$id)->get();
        return json_encode($get);
    }
}
