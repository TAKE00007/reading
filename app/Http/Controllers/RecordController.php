<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Http\Request\RecordRequest;

class RecordController extends Controller
{
    public function mypage(Record $record)
    {
        $records = Record::get();
        // dd($records);
        $month_pagesArray = [];
        $monthArray = [];
        foreach($records as $record){
            $month_pagesArray[] = $record->month_page;
            $monthArray[] = $record->month;
        }
        
        // dd($month_pagesArray);
        
        return view('readings.mypage')->with(['month_page'=>$month_pagesArray,'month'=>$monthArray,'records' => $record->getByRecordlimit()]);
        
    }
    
    public function goal(Record $record)
    {
        return view('readings.goal')->with(['record' => $record]);
    }
    
    
    public function update(Request $request, Record $record)
    {
        $input_record = $request['record'];
        // $record->fill($input_record)->save();
        // $record->month = date('Y-m-d',strtotime("first day of this month"));
        // // 月初を取得
        // $record->goal = $input_record['goal'];
        // $record->save();
        $date = date('Y-m-d',strtotime("first day of this month"));
        // // 現在の日付を取得
        // dd($record->where('month',$date)->exists());
        if($record->where('month',$date)->exists()){
            $record = $record->where('month',$date)->first();
        // あった場合、複数ある中での最初の1つの情報
        // recordtableのmonthカラムに$dateのデータを探す
        // trueかfalseで返す
            $record->goal = $input_record['goal'];
            $record->save();
        } else{
            $input_record = ['month'=>date('Y-m-d',strtotime("first day of this month")),'goal'=>$input_record['goal']];
            // データの新規作成
            $record = new Record();
            // $recordが影響していた、新しいインスタンス作成。
            $record->fill($input_record)->save();
        }
        // dd($input_record['goal']);
        
        return redirect('/books/mypage/');
    }
}
