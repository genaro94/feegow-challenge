@extends('layouts.app')

@section('content')

    @section('title', 'PACIENTES')

    @include('patients.components.table-patients')

@endsection
