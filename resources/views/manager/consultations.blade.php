
@extends('admin.base')

@section('adminbase')

<table class="table table-dark table-stripped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name </th>
      <th scope="col">Phone</th>
      <th scope="col">Comment</th>
      <th scope="col"> Time to call </th>

    </tr>

    @foreach( $data as $instance )

    <tr>
    <td scope="col"></td>  
    <td scope="col">{{ $instance->name }}</td>
    <td scope="col">{{ $instance->phone }}</td>
    <td scope="col">{{ $instance->comment }}</td>
    <td scope="col">{{ $instance->timeToCall }}</td>


    <td>
    {!! Form::open(['route' => ['manager.consultations.destroy', $instance->id] , 'method'=>'delete']) !!}
                        {!! Form::submit('Delete !' , ['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
    </td>
    </tr>

    @endforeach
  </thead>
</table>

@endsection


