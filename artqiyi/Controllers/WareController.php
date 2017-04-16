<?php

namespace Artqiyi\Controllers;

use App\Http\Controllers\Controller;
use Artqiyi\Models\WareModel;
use Illuminate\Http\Request;

class WareController extends BaseController
{
    public function index(Request $request)
    {
        $wares = WareModel::paginate(20);
        return view('ware.index', compact('wares'));
    }

    public function show($id)
    {
       return view('ware.show', ['ware' => WareModel::find($id)]); 
    }
}