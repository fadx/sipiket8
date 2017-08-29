


  <h1> index siswa </h1>

  <h1>Artikels <a href="{{ url('/students/create') }}" class="btn btn-primary btn-xs" title="Add New artikel"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
  <div class="table">
    <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th> ID</th>
          <th> NISN </th>
          <th> Nama </th>
          <th> Tanggal Lahir </th>
          <th> Telpon </th>
          <th> Alamat </th>
          <th> Angkatan </th>
        </tr>
      </thead>

      <tbody>
        {{--  $x=0 --}}
      @foreach($students as $item)
        {{--  $x++ --}}


        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nisn }}</td>
          <td>{{ $item->full_name }}</td>
          <td>{{ $item->birth_date }}</td>
          <td>{{ $item->telephone }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->batch }}</td>
          <td>
            <a href="{{ url('/students/' . $item->id) }}" class="btn btn-success btn-xs" title="View artikel"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
            <a href="{{ url('/students/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit artikel"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
            {!! Form::open([
                'method'=>'DELETE',
                'url' => ['/ListPelanggaran', $item->id],
                'style' => 'display:inline'
            ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete artikel" />', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete artikel',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>
    {{-- <div class="pagination-wrapper"> {!! $list->render() !!} </div> --}}
  </div>

  echo $students;
