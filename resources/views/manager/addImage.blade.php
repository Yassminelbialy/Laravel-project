



@extends('admin.base')


@section('adminbase')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">




<link rel="stylesheet" type="text/css" href="{{ asset('css/fbstyle.css') }}" >


    <div class="container">

            <div class="row">
                    <div class="col-lg-8">
                        
                    {{ Form::open(['route' => 'manager.fbPosts.store','enctype' => 'multipart/form-data','method'=>'post'])}}
                  
                    <div class="form-group">
                            <label for="exampleFormControlFile1">Enter Your Link</label>
                            <input type="text" class="form-control" name="linkinput">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Image</label>
                            <input type="file" class="form-control-file btn btn-success" id="exampleFormControlFile1" name="image">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>


                    </div>
            </div>


    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@endsection

{{ Form::close() }}