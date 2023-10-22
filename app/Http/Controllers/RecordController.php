<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Http\Request\RecordRequest;

class RecordController extends Controller
{
    public function mypage(Record $record)
    {
        return view('readings.mypage')->with(['records' => $record->get()]);
    }
    
    public function goal(Record $record)
    {
        return view('readings.goal')->with(['record' => $record]);
    }
    
    
    public function update(Request $request, Record $record)
    {
        $input_record = $request['record'];
        $record->fill($input_record)->save();
        return redirect('/mypage/' . $record->id);
    }
}
