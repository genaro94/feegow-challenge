@extends('layouts.app')

@section('content')

    @section('title', 'AGENDAMENTO')

    @include('scheduling.components.selects.specialties')

    @include('scheduling.components.tables.specialities')

    @include('scheduling.components.modals.request-time')

@endsection
