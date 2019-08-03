@extends('layouts.master')

@section('content')
<div class="admin-panel">
<div id="new">
	<h1>Admin Panel</h1>
</div>

<h2 class="admin-panel">There are <strong class="text-danger">{!! $count !!}</strong> trips that require your attention</h2>
<br>
 <div class="list-group">
 @foreach($schedules as $schedule)
 	<a href="{{ route('trips', $schedule->user_id) }}" class="list-group-item">{{ $schedule->name }}</a>
@endforeach
</div>
</div>

