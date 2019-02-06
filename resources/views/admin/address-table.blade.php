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
				<a href="{{ route('admin.address.create') }}">
					<button class="btn btn-primary btn-xs">
						<i class="fa fa-plus"></i> Tambah
					</button>
				</a>
				<table class="table table-striped table-bordered" id="datatable">
					<thead>
						<tr>
							<th>Alamat</th>
							<th>No.Tlp</th>
							<th>Kecamatan</th>
							<th>Kelurahan</th>
							<th>kota</th>
							<th>shift1</th>
							<th>shift2</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
	    				@foreach($address as $v)
	    					<tr>
	    						<td>{{$v->alamat}}</td>
	    						<td>{{$v->no_tlp}}</td>
	    						<td>{{$v->kecamatan}}</td>
	    						<td>{{$v->kelurahan}}</td>
	    						<td>{{$v->kota}}</td>
	    						<td>{{$v->shift1}}</td>
	    						<td>{{$v->shift2}}</td>
	    						<td>
	    							<div class="btn btn-group">
	    								<a href="" class="btn btn-warning btn-xs">
	    									<i class="fa fa-pencil"></i>
	    								</a>
	    								<a href="" class="btn btn-danger btn-xs">
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