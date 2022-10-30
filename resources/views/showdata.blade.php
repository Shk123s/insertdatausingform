<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
    <link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style>
     .cona{
        margin-bottom: 12px;
        margin-top:12px ;
     }
     </style>
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="container">
            <div class="cona">
                <a href="{{route('first')}}" class="btn btn-primary ">HOME</a>
            </div>
            <table class="table" id="table">
                <thead>
                    <tr>
                        
                        <th class="text-center">No.</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">password</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">filename</th>
                        <th class="text-center">image</th>
                        <th class="text-center">created_at</th>
                        <th class="text-center">updated_at</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($post as $posts)
                        <td>{{$posts->id}}</td>
                       
                        <td>{{$posts->email}}</td>
                        <td>{{$posts->password}}</td>
                       
                        <td>{{$posts->name}}</td>
                        <td>{{$posts->filename}}</td>
                        <td><img  height="30px" width="30px" src="{{asset('storage/app/public/uploads')}}" alt="kuchnhi"/></td>
                        <td>{{$posts->created_at}}</td>
                        <td>{{$posts->updated_at}} </td>
                          
                         
                            
                        
                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
     </div>
 </div>
    


  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script
      src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#table').DataTable();
  } );
   </script>
   <script>
        
                 
      </script>
</body>
</html>