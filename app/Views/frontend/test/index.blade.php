@extends('layouts.frontend.default')
@section('content')
    <form method="get" action="{{ route('frontend.index') }}">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name_cons_or_email_cons" value="{{ old('name_cons_or_email_cons') }}">
        <button type="submit">Search</button>
    </form>
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
        <th>Name</th>
        <th>Email</th>
        </thead>
        <tbody>
        @if(isset($entities))
        @foreach($entities as $entity)
        <tr>
            <td>{{ $entity->name }}</td>
            <td>{{ $entity->email }}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
@stop
