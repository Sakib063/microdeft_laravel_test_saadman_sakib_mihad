<div>
    @foreach($projects as $project)
        <tr>
            <td>{{ $project->title }}</td>
            <td>{{ $project->description }}</td>
            <td>{{ $project->start_date }}</td>
            <td>{{ $project->end_date }}</td>
        </tr>
    @endforeach
</div>
