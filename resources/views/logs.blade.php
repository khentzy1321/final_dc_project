@extends('layouts.admin')

@section('title', 'Logs')

@section('content')
    <div class="container mt-5">
        <div class="d-grid gap-2 d-md-flex mt-2">
            <h1 style="font-size: 25px; font-weight: 400; color: rgb(0, 0, 0);">Activity Log</h1>
        </div>
        <table class="table shadow-lg text-center">
            <thead style="background-color:#c6fff6; color:rgb(0, 0, 0);">
                <tr>
                <th>Timestamp</th>
                <th>Log Entry</th>
            </tr>
            </thead>
            <tbody class="text-black">
                @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->created_at->format('l, d F Y g:i A') }}</td>
                    <td>{{ $log->log_entry }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

