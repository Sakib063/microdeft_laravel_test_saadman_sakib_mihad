<div>
    @foreach($projects as $project)
        <p>Title: {{$project->title}}</p>
        <p>Description: {{$project->description}}</p>
        <p>Start Date: {{$project->start_date}}</p>
        <p>End Date: {{$project->end_date}}</p>
    @endforeach
</div>
