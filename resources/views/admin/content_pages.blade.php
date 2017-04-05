<div style="margin: 0 50px;">
    @if($PageList)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Pseudo</th>
                <th>Text</th>
                <th>Created Date</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach($PageList as $k => $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{!! Html::link(route('pagesEdit', ['page' => $page->id]), $page->name, ['alt' => $page->name]) !!}</td>
                <td>{{ $page->alias }}</td>
                <td>{{ $page->text }}</td>
                <td>{{ $page->created_at }}</td>
                <td>
                    {!! Form::open(['url'=>route('pagesEdit', ['page' => $page->id]), 'class' => 'form-horizontal', 'method' => 'POST']) !!}
                    {!! Form::hidden('action', 'delete') !!}
                    {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @endif
        {!! Html::link(route('pagesAdd'),' New Page',['class'=>'fa fa-plus']) !!}
</div>