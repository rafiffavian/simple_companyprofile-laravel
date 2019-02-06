@extends('adminlte::page')

@section('title', 'MainCourse-create Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create Gusto</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.dinner.store') }}" method="post">
          			@csrf
          			<div class="form-group">
                  <label for="pengisi_acara">Nama Makanan</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="name" value="{{old('name')}}" class="form-control" required=""><br>
                  <label for="pengisi_acara">Kategori</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <select name="id_menu" id="" class="form-control">
                    
                      <option value="3">Dinner</option>
                    
                  </select><br>
                  <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea name="description" id="" cols="30" rows="10" class="form-control">{{old('description')}}</textarea>
                  <label for="">Harga</label>
                  <input type="text" value="{{old('price')}}" name="price" value="" class="form-control" required="">
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