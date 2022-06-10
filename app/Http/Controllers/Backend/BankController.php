<?php

namespace App\Http\Controllers\Backend;
use App\Models\Bank;
use App\Models\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use PDF;

class BankController extends Controller
{
    public function BankView()
    {
        $banks = bank::all();
        return view('Backend.Bank.View_Bank', compact('banks'));
    }
    public function BankAdd()
    {
        return view('Backend.Bank.Add_Bank');
    }
    public function BankStore(Request $request)
    {
        $banks = new bank();
        $banks->bankname = $request->bankname;
        $banks->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Bank Added Successfully'

        );

        return redirect()->route('bank.view')->with($notification);
    }

    public function BankEdit($id)
{

    $banks = Bank::find($id);
    return view ('Backend.Bank.Edit_Bank' , compact('banks'));
    
}

public function BankUpdate(request $request ,  $id)
{
    $banks = bank::find($id);
    $banks->bankname = $request->bankname;
    $banks->save();

    $notification = array(
        'alert-type' => 'success',
        'message' => 'Bank Updated Successfully'

    );

    return redirect()->route('bank.view')->with($notification);

}

public function BankDelete($id){
    $banks = bank::find($id);
    $banks->delete();

    $notification = array(
        'message' => 'Bank Deleted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('bank.view')->with($notification);
}


public function BankWiseIndex()
{
    $banks = bank::all();
    return view('Backend.Reports.ReportIndex', compact('banks'));
}

Public function BankWiseReport()
{
    $banks = bank::all();
    return view('Backend.Reports.ShowReport', compact('banks'));
    
    // $result = DB::table('banks')                
    //           ->join('branches', 'banks.id', '=' , 'branches.bankid')
    //           ->orderBy ('bankname')
    //           ->get();

    //           $data['results'] = $result;


  
        // return view('Backend.Reports.ShowReport', compact('banks','branches'));

    
}
public function downloadpdf()
{
    $banks = bank::all();
    $pdf = PDF::loadView('Backend.Reports.PDF.bankbranchespdf', compact('banks'));
    return $pdf-> download('branches.pdf');
}

}
