<table class="table table-responsive" id="siswas-table">
    <thead>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Sekolah</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($siswas as $siswa)
        <tr>
            <td>{!! $siswa->nama !!}</td>
            <td>{!! $siswa->kelas !!}</td>
            <td>{!! $siswa->jurusan !!}</td>
            <td>{!! $siswa->sekolah !!}</td>
            <td>{!! $siswa->created_at !!}</td>
            <td>{!! $siswa->updated_at !!}</td>
            <td>
                {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('siswas.show', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('siswas.edit', [$siswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>