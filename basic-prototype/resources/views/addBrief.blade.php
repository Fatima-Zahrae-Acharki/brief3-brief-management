<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<h2>Add Apprenticies</h2><br><br>
    <form action="addBrief" method="POST">
        @csrf
        <input type="text" name="bName" placeholder=" Brief name " id="inp">
        <input type="date" name="start_date" placeholder=" Start date " id="inp">
        <input type="date" name="end_date" placeholder=" End date " id="inp">
        <input type="text" name="description" placeholder=" Brief description " id="inp">
        <input type="submit" value="ADD" id="inpbtn">
    </form>
    <br>

    <br>
    <h2>briefs</h2>
    <div id="paragraph" >
    <table>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>startdate</th>
                <th>end date</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td  >{{$value->bName}} </td>
                    <td  >{{$value->start_date}} </td>
                    <td  >{{$value->end_date}} </td>
                    <td  >{{$value->description}} </td>

                    <td>
                        <!-- <button class="btn1"><a href="{{url ('edit')}}/{{$value->id}}" class="btn1">Edit</a></button> -->
                        <!-- <button class="btn2"><a href="{{('delete')}}/{{$value->id}}" class="btn2">Delete</a></button> -->
                    </td>

                </tr>
            @endforeach
                
            </tbody>
    </table>
    </div>
    <br>
     
    <input type="text" id="searchBrief" placeholder="Search brief" >


    <script src="/briefs.js"></script>

</body>
</html>