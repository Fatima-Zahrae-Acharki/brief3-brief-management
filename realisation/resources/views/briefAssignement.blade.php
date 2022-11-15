<link rel="stylesheet" href="/test.css">

<div id="">
    <br>
    <h2>Assign a brief</h2>
    <br>

<table class=""id="apprenant">
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Action</th>               
        </tr>

    </thead>
    <tbody id ="contentStudent">
        @foreach ($data as $value) 

        <tr>
            <td >{{$value->first_name}}</td>
            <td >{{$value->last_name}}</td>
            <td>
                <button class="btn1"><a href="{{$briefId}}/Attach/{{$value->id}}" class="btn1">Attach</a></button>
                <button class="btn2"><a href="{{$briefId}}/Detach/{{$value->id}}" class="btn2">Detach</a></button>
            </td>
        </tr>
        


        @endforeach  
         
    </tbody>
    

</table>
</div>
<br><br><br>
<button class="btn5"><a href="{{$briefId}}/AttachClass/" class="btn5">Attach to class</a></button>
