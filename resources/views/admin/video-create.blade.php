@extends('adminlte::page')

@section('title', 'video-create Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Image Gusto</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.video.store') }}" method="post">
          			@csrf
          			<div class="form-group">
                  <label for="pengisi_acara">Upload Video</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="file" id="pengisi_acara" class="form-control" required="" value="{{ old('file')}}"><br>
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