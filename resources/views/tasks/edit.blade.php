<h1>My List</h1>
<h2>Modifier une Tâche</h2>
<form action="{{ route('update.task', ['id' => $task->id]) }}" method="POST">
    @csrf
    <div>
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" value="{{$task->title}}" required>
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description"  value="{{$task->description}}" required>
    </div>
    <button type="submit">Modifier</button>
</form>

{{-- @dd($task) --}}