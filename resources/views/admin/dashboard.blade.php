@extends('layouts.admin')
@section('title')
Acceuil
@endsection
@section('contentheader')
Acceuil 
@endsection
@section('contentheaderlink')
<a href="{{ route('admin.dashboard') }}">Link</a>
@endsection
@section('contentheaderactive')
View
@endsection
@section('content')
<div class="row" style="background-image: url({{ asset('assets/admin/imgs/dash.jpg') }}) ;background-size:cover;background-repeate:ni-repeate; min-height:600px;">
 
</div>
@endsection