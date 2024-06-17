<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
    <h1>My List</h1>


   <ul>
    @foreach ($tasks as $task)
    <li>{{$task->title}}: {{$task->description}} 
        <a href="">X</a>
    </li>
        
    @endforeach
   </ul>

</body>
</html>