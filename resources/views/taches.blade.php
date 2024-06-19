<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
    <title>List</title>
</head>
<body>
    <div class="container">
    <h1>My List</h1>
    <h2>Ajouter une Tâche</h2>
    <form action="{{ route('store.task') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required>
        </div>
        <input type="hidden" name="status" value='0'>
        <button type="submit" class="btn-add">Ajouter</button>
    </form>


<div class="list">
   <ul>
    <div class="tache">
    @foreach ($tasks as $task)
    <li>{{$task->title}}: {{$task->description}} 
        
        <form action="{{route('edit.task',['id'=> $task->id])}}" method="GET">
            @csrf
            <button type="submit" class="btn-edit">Edit</button>
        </form>
        <form action="{{ route('destroy.task', ['id' => $task->id]) }}" method="POST">
            @csrf
            <button type="submit" class="btn-delete">Delete</button>
        </form>
    </li>
        
    @endforeach
</div>
   </ul>
</div>
</div>
</body>
</html>