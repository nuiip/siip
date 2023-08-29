<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="auths-table">
            <thead>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($auths as $auth)
                <tr>
                    <td>{{ $auth->username }}</td>
                    <td>{{ $auth->email }}</td>
                    <td>{{ $auth->password }}</td>
                    <td>{{ $auth->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['auths.destroy', $auth->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('auths.show', [$auth->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('auths.edit', [$auth->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $auths])
        </div>
    </div>
</div>
