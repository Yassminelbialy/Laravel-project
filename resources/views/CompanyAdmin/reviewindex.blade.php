@extends('admin.companyBase')
@section('CompanyAdminBase')

<div class="text-center">
  <table class="table table-dark" style="background-color: rgba(0,0,0,0.5);">
    <thead>
      <tr>
        <td colspan="2"><a href="{{route('company.reviewTrash.index')}}"><i class="fas fa-trash fa-4x" style="color: blue"></i></a></td>
        <td colspan="2"><a href="{{route('company.review.create')}}"><i class="fas fa-plus fa-4x" style="color: blue"></i></a></td>      </tr>
      <tr>
        <th scope="col" class="text-light h6" style="font-weight:700">#</th>
        <th scope="col" class="text-light h6" style="font-weight:700">image</th>
        <th scope="col" class="text-danger h6" style="font-weight:700" colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reviews as $review)
      <tr>
        <th scope="row">{{$review->id}}</th>
        <td><img src="/images/review/{{$review->image}}" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"></td>
        <td>
          <a href="{{ route('company.review.edit', $review->id) }}"> <i class="fas fa-edit fa-2x" style="color: blue"></i></a>
        </td>
        <td>
          {!!Form::open(['route'=>[ 'company.review.destroy' , $review->id],'method'=>'delete','style'=>' display: inline-block '])!!}
          {{ Form::button('<i style="color:red"class="fa fa-trash fa-2x"></i>', ['type' => 'submit'] )  }}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection