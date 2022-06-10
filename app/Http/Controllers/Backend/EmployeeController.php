<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\department;
use App\Models\designation;
use App\Models\grade;
use App\Models\bank;
use App\Models\branch;
use App\Models\employee;
use App\Models\legalheir;
use App\Models\User;
use Auth;


class EmployeeController extends Controller
{
    public function index()
    {
        $departments = department::all();
        $designations = designation::all();
        $grades = grade::all();
        $banks = DB::table('banks')->orderBy('bankname', 'asc')->get();
        $branches = branch::All();
        return view('Backend.Employees.AddEmployee', compact('departments','designations','grades','banks','branches'));
    }
    public function EmployeeView()
    {
      $users = User::all();
        return view('Backend.Employees.ViewEmployee', compact('users'));
    }
    public function EmployeeStore(Request $request)
    {
                //variable for retirements to assinge to self value must be one;
    //   $self = 1;
    //   $this->validate($request,[
            
           
    //         'prno' => 'required|max:9|unique:employees,PersonalNumber',
    //         'name' => 'required',
    //         'father' => 'required',
    //         'cnic' => 'min:15|max:15|unique:employees,EmployeeCNIC|required',
    //         'birth' => 'required',
    //         'ddos' => 'required',
    //         'marital' => 'required',
    //         'funds' => 'required',
    //         'grads' => 'required', 
    //         'title' => 'required',
    //         'insurance' => 'required',
    //         'deathOretir' => 'required',
            
    //         'age' => 'required',
    //         'enddate' => 'required',
    //         'contribution' => 'required',
    //          ]);

    
     
      $employees = new employee();
      $employees->pno = $request->get('pno');
      $employees->employeecnic = $request->get('employeecnic');
      $employees->employeename = $request->get('employeename');
      $employees->fathername = $request->get('fathername');
    //$employees->EmployeeCNIC = str_replace('-', '',$request->get('cnic'));
      $employees->dateofbirth = $request->get('dateofbirth');
      $employees->department = $request->get('department');
      $employees->designation = $request->get('designation');
      $employees->grade = $request->get('grade');
      $employees->gitype = $request->get('gitype');
      $employees->retirementdate = $request->get('retirementdate');
      $employees->dateofdeath = $request->get('dateofdeath');
      $employees->legalheirs = $request->get('legalheirs');
      $employees->status = $request->get('status');
      $employees->contribution = $request->get('contribution');
      $employees->entryuser = Auth::user()->name;
      $employees->save();

      
      $legalheirs = new legalheir();
      $legalheirs->heircnic = $request->get('heircnic');
      $legalheirs->heirname = $request->get('heirname');
      $legalheirs->relation = $request->get('relation');
      $legalheirs->bankname = $request->get('bankname');
      $legalheirs->bankbranch = $request->get('bankbranch');
      $legalheirs->accountno = $request->get('accountnumber');
      $legalheirs->amount = $request->get('amount');
      $legalheirs->empid = $employees->id;
      $legalheirs->save();
      return view('Backend.Employees.ViewEmployee');


      



    //   $orgDate = $request->get('birth');
    //   $date = str_replace('/"', '-', $orgDate); 
    //   $newDate = date("Y-m-d", strtotime($date));
    //   $employees->DateBirth = $newDate;
    //   $employees->DeptID = $request->get('funds');
    //   $employees->MaritalStatusID = $request->get('marital');
    //   $employees->DDO = $request->get('ddos');

    //   $employees->Grade = $request->get('grads');
    //   $employees->SDetObj = $request->get('title');
    //   $employees->GITypeID = $request->get('insurance');
  
    //   $DeathOrretirmentDate = $request->get('enddate');
    //   $DRdate = str_replace('/"', '-', $DeathOrretirmentDate); 
    //   $enddates = date("Y-m-d", strtotime($DRdate));
     

    //  if(2 == $request->get('deathOretir')){
    //       $employees->DateDeath = $enddates;
    //       $employees->LegalHeirs = $request->get('beni');
             
    //  }else{
      
    //       $employees->DateRetirement = $enddates;
    //        $employees->LegalHeirs = $self;
    //  }

    //  $employees->AgeOnDate = $request->input('age');
    //  $employees->Contribution = $request->input('contribution');
    //  $employees->Status = "submit";
    //  $employees->user_id = Auth::id();
    //  $employees->save();
    //  return redirect()->to(url('/index/employees/beneficiary/create',$employees->id));
     
    }
    
    public function getbankbranch(request $request)
    {

      // echo "get branch";
      $bankid = $request->post('bankid');
      $branches = DB::table('branches')->where('bankid',$bankid)->get();
      $html = '<option>Select Branch</option>';

      foreach ($branches as $branch) {
          $html.='<option value = "'.$branch->id.'">'.$branch->branchaddress.'</option>';
      }
      echo $html;
    }
    // public function onetomany($id)
    // {
    //   $Branch=  Branch::find($id);
    //    echo $Branch->GetBanks->bankname;
      
    // }
  }

