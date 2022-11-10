<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($brief as $row)
<form action="{{url('updateBrief')}}/{{$row->id}}" method="POST">
        @csrf
        <input type="text" name="bName" placeholder=" Brief name " value="{{$row->name}}" id="inp">
        <input type="date" name="start_date" placeholder=" Start date " value="{{$row->start_date}}" id="inp">
        <input type="date" name="end_date" placeholder=" End date " value="{{$row->end_date}}" id="inp">
        <input type="text" name="description" placeholder=" Brief description " value="{{$row->description}}" id="inp">
        <button>submit</button>
</form>
@endforeach


<br><br>

</body>
</html>