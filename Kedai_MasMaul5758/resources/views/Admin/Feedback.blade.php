@extends('template-admin')
@section('content_admin')
    <title>Feedback</title>
    <div class="container-fluid py-5">
        <div class="col">
            @foreach ($feedbacks as $feedback)
                <div class="col border border-bottom-1 border-top-1 border-start-0 border-end-0 border-warning p-2"
                    style="flex-direction: column">
                    <span class="" style="font-size: 20px"> <b>{{ $feedback->nama }}</b></span> <br>
                    <span style="color: grey">{{ $feedback->email }}</span>
                    <p>{{ $feedback->pesan }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
