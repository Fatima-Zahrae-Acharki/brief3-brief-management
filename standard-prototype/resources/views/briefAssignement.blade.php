<link rel="stylesheet" href="/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<link rel="stylesheet" href="">




<div id="">
    <br>
    <h2>Assign a brief</h2>
    <br>

<table class=""id="apprenant">
    <thead>
        <tr>
            <th >First name</th>
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
                <a href="{{$briefId}}/Attach/{{$value->id}}"><button class="">Attach</button></a>
                <a href="{{$briefId}}/Detach/{{$value->id}}"><button class="">Detach</button></a>
            </td>
        </tr>
        


        @endforeach  
         
    </tbody>
    

</table>
</div>
<button class=""><a href="{{$briefId}}/AttachClass/">Attach to class</a></button>
