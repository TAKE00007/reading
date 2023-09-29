<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function mypage(Record $record)
    {
        return view('readings.mypage')->with(['records' => $record->get()]);
    }
}
