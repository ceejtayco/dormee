@extends('layouts.app')


@section('content')
@if(isset($dorm))
@include('sections.view_dorm')
@else
@include('sections.dorms')
@endif
@stop