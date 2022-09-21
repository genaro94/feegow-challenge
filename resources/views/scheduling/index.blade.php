@extends('layouts.app')

@section('content')

    @section('title', 'AGENDAMENTO')

    @include('scheduling.components.select-specialties')

    @include('scheduling.components.table-specialities')

    @include('scheduling.components.modal')

@endsection
