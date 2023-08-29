<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="tests-table">
            <thead>
            <tr>
                <th>Body</th>
                <th>Title</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tests as $test)
                <tr>
                    <td>{{ $test->body }}</td>
                    <td>{{ $test->title }}</td>
                    <td>{{ $test->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['tests.destroy', $test->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('tests.show', [$test->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tests.edit', [$test->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $tests])
        </div>
    </div>
</div>
