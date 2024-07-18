@extends('layouts.admin')

@section('title', 'Admin Purchases')

@section('content')

    <div class="container">
        <<h1>Feedback Entries</h1>
        <div class="table-responsive">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Masukan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($feedbacks as $index => $feedback)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $feedback->fullname }}</td>
                            <td>{{ $feedback->email }}</td>
                            <td>{{ $feedback->feedback }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">No feedback found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
