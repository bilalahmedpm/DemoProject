<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach ($banks as $bank)
 
    <h3>{{$bank->bankname}}</h3>

    @foreach ($branches as $branch)
 
 <h3>{{$branch->Banks->branchaddress}}</h3>

 

 @endforeach

    @endforeach

    




</body>
</html>