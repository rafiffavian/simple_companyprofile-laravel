@extends('adminlte::page')

@section('title', 'Breakfast-table gusto')

@section('content_header')
@stop

@section('content')
    
   <div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Table Breakfast</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ route('admin.break.create') }}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Nama Makanan</th>
							<th>Kategori</th>
							<th>Description</th>
							<th>Harga</th>
							<th>Created_At</th>
							<th>Updated_At</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
	    				@foreach($menu as $v)
	    					<tr>
	    						<td>{{$v->name}}</td>
	    						<td>{{$v->tipeMenu->name}}</td>
	    						<td>{{$v->description}}</td>
	    						<td>{{$v->price}}</td>
	    						<td>{{$v->created_at}}</td>
	    						<td>{{$v->updated_at}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="{{ route('admin.break.edit',$v->id) }}" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"></i>
	    								</a>
	    								<a href="{{ route('admin.break.delete',$v->id) }}" class="btn btn-danger btn-xs">
	    									<i class="fa fa-trash"></i>
	    								</a>
	    							</div>
	    						</td>
	    					</tr>
	    				@endforeach
	    				</tbody>
	    			</table>
	    		</div>
	    	</div>
	    </div>	
	</div>		
@stop
{{-- @section('js')
	<script>
		$(document).ready(function() {
		    $('#datatable').DataTable({
		        processing: true,
		        serverSide: true,
		        ajax: '{!! route('admin.break.getJsonData') !!}',
		        method: "GET",
		        columns: [
		            { data: 'name', name: 'name' },
		            { data: 'id', name: 'id' },
		            { data: 'description', name: 'description' },
		            { data: 'price', name: 'price' },
		            { data: 'created_at', name: 'created_at' },		            
		            { data: 'updated_at', name: 'updated_at' }		            
		        ]
		    });
				});
	</script>
@endsection --}}