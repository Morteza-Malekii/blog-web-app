@extends('layouts.dashboard.master')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main contain START -->
<section class="py-4">
	<div class="container">
		<div class="row g-4">

            @include('dashboard.partial.index.statistic')
            @include('dashboard.partial.index.chart')
            @include('dashboard.partial.index.viewStatuistic')
            @include('dashboard.partial.index.newsList')

		</div>
	</div>
</section>
<!-- =======================
Main contain END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
