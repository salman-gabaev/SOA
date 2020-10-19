@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Page UID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Created</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
                <tr>
                    <th scope="row">{{ $item->page_uid }}</th>
                    <td>{{ $item->fields['name'] }}</td>
                    <td>{{ $item->fields['email'] }}</td>
                    <td>{{ $item->fields['phone'] }}</td>
                    <td>{{ $item->created_at }}</td>
                </tr>
            @empty
                <p>Not Data</p>
            @endforelse
        </tbody>
    </table>
@endsection
