@extends('layouts.admin')
@section('content')
<div class ="content">
	<div class="row">
		<div class ="col-lg-12">
			
		</div>
	</div>
</div>
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $client }}</h3>
                <p>Students</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
​
        </div>
    </div>
​
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $employee }}</h3>
                <p>Lecture</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
​@endsection

​
@section('js')
    <!-- LOAD FILE dashboard.js -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection