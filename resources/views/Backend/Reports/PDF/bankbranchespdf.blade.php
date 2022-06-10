<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Branches PDF</title>
   
</head>
<style>
table.minimalistBlack {
  width: 100%;
  text-align: left;
  
}
table.minimalistBlack td, table.minimalistBlack th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.minimalistBlack tbody td {
  font-size: 13px;
}
table.minimalistBlack thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);

}
table.minimalistBlack thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: left;
}
table.minimalistBlack tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  border-top: 2px solid #444444;
}
table.minimalistBlack tfoot td {
  font-size: 14px;
}
</style>

<body>

<h3 style= "text-align:center">Bank Branches List</h3>

<table class="minimalistBlack">

@foreach($banks as $key => $bank)

<h4 style="padding: 0px; margin-bottom:0px;">{{$bank -> bankname}}</h4>
<hr> 


<thead>
<tr>
<th>SL</th>
<th>Branch Code</th>
<th>Branh Address</th>
</tr>
</thead>

<tbody>
@foreach($bank->Branches as $key => $bankbranches)	
<tr>
    <td>{{$key +1}}</td>
    <td>{{$bankbranches->branchcode}}</td>
    <td>{{$bankbranches->branchaddress}}</td>     
</tr>


</tbody>
@endforeach
@endforeach
</table>    
</body>
</html>