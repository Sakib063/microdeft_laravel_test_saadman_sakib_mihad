<div>
<form method="POST" action="{{ route('projects.update') }}">
    @csrf
    <div>
        <input type="text" id="Title" name="Title" placeholder="Title">
    </div>
    <div>
        <input type="text" id="Description" name="Description" placeholder="Description">
    </div>
    <div>
        <input type="text" id="start" name="start" placeholder="Start Date">
    </div>
    <div>
        <input type="add" id="end" name="end" placeholder="End Date">
    </div>
    <div>
    <input type="checkbox" id="dev1" name="dev1" value="Developer 1">
    <label for="dev1"> Developer 1</label>
    <input type="checkbox" id="dev2" name="dev2" value="Developer 2">
    <label for="dev2">Developer 2</label>
    <input type="checkbox" id="dev2" name="dev2" value="Developer 2">
    <label for="dev3">Developer 3</label>
    <input type="checkbox" id="dev3" name="dev3" value="Developer 3">
    <label for="dev4">Developer 4</label>
    <input type="checkbox" id="dev4" name="dev4" value="Developer 4">
    </div>

    <button type="submit">Submit</button>
</form></div>
