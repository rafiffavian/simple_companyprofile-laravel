@extends('adminlte::page')

@section('title', 'Front-up-create Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Chef</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{route('admin.chef.update', $chef->id)}}" method="post" enctype="multipart/form-data">
          			@csrf
                @include('error-form')
                <input type="hidden" value="put" name="_method">
          			<div class="form-group">
                  <label for="pengisi_acara">Upload Gambar</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="file" name="file" id="pengisi_acara" class="form-control" ><br>
                  <label for="pengisi_acara">Name</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="name" class="form-control" value="{{$chef->name}}"><br>
                  <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea name="description" id="" cols="30" rows="10" class="form-control">{{$chef->description}}</textarea>
          			</div>
          			<div class="form-group text-right">
                  <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
          		</form>
          	</div>
          </div>
      </div>
    </div>

@endsection