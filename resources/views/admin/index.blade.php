		@extends('layouts.admin')

		@section('content')

	<div class="alert  {{Session::get('clase')}} alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong> {{Session::get('message-error-adm')}}</strong> 
	 
	</div>


		@stop

