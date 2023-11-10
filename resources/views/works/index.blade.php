@extends('layouts.app')

@section('content')
    <h1>Works</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>Sent Works</h2>
    <ul>
        @foreach($user->works as $sentWork)
            <li>{{ $sentWork->name }}</li>
        @endforeach
    </ul>

    <h2>All Works</h2>
    <ul>
        @foreach($works as $work)
            <li>
                {{ $work->name }}
                <form action="{{ route('works.sendAlert', ['user_id' => $defaultUserId, 'work' => $work->id]) }}" method="post">
                    @csrf
                    <button type="submit">Send Alert</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
