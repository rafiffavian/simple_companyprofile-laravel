@extends('adminlte::page')

@section('title', 'Breakfast-edit Gusto')

@section('content_header')
    
@stop

@section('content')
	 <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Breakfast</h3>
            </div>
	    <div class="box-body">
          <div class="row">
          	<div class="col-md-12">
          		<form action="{{ route('admin.break.update',$mybreakfast->id) }}" method="post">
          			@csrf
                <input type="hidden" value="put" name="_method">
          			<div class="form-group">
                  <label for="pengisi_acara">Nama Makanan</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <input type="text" name="name" id="pengisi_acara" class="form-control" required="" value="{{$mybreakfast->name}}"><br>
                  <label for="pengisi_acara">Kategori</label> <!-- for di dalem lebel itu merujuk pada id -->
                  <select name="id_menu" id="" class="form-control">
                    @foreach(App\Menu::all() as $item)
                      <option value="{{$item->id}}"@if($mybreakfast->id_menu == $item->id) selected='selected' @endif>{{$item->name}}</option>
                    @endforeach  
                  </select><br>
                  <label for="pengisi_acara">Description</label> <!-- for di dalem lebel itu merujuk pada id -->
          				<textarea name="description" id="" cols="30" rows="10" class="form-control">{{$mybreakfast->description}}</textarea>
                  <label for="">Harga</label>
                  <input type="number" name="price" value="{{$mybreakfast->price}}" required="" class="form-control">
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