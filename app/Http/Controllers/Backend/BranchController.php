<?php

namespace App\Http\Controllers\Backend;
use App\Models\branch;
use App\Models\bank;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function BankBranchView()
    {
        $banks = bank::all();
        $branches = branch::all();
        return view ('Backend.Branches.View_Branch' , compact('branches', 'banks'));
    }
    public function BankBranchAdd()
    {
        $banks = bank::all();
        return view('Backend.Branches.Add_Branch' , compact('banks'));
    }
    public function BankBranchStore(Request $request)
    {
        $branches = new branch();
        $branches->branchcode = $request->input('branchcode');
        $branches->branchaddress = $request->input('branchaddress');
        $branches->bankid= $request->input('bankid');
        $branches->save();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Branch Added Successfully'

        );

        return redirect()->route('bank.branch.view')->with($notification);
    }
}
