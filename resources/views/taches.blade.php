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
        <button type="submit">Ajouter</button>
    </form>

   <ul>
    @foreach ($tasks as $task)
    <li>{{$task->title}}: {{$task->description}} 
        
        <a href="{{route('edit.task',['id'=> $task->id])}}">Edit
        </a>
        <form action="{{ route('destroy.task', ['id' => $task->id]) }}" method="POST">
            @csrf
            <button type="submit">Delete</button>
        </form>
    </li>
        
    @endforeach
   </ul>

</body>
</html>