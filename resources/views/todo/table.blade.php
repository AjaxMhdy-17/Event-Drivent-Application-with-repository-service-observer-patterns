<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    title
                </th>
                <th>
                    description
                </th>
                <th>
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($todos as $todo)
            <tr>
                <td>
                    {{ $todo->title }}
                </td>
                <td>
                    {{ $todo->description }}
                </td>
                <td class="d-flex gap-3 justify-content-end">
                    <div>
                        <a href="{{route('todo.edit',['todo' => $todo->id])}}" class="btn btn-warning">edit</a>
                    </div>
                    <div>
                        <form action="{{route('todo.destroy',['todo' => $todo->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan=4>
                    no data to show
                </td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>