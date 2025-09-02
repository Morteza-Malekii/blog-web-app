
@extends('layouts.front.master')
@section('content')
<!-- **************** MAIN CONTENT START **************** -->
<main>

@include('front.partial.index.TrendeingNews')

    <!-- =======================
Main hero START -->
@include('front.partial.index.DailyNews')
@include('front.partial.index.NewsCategories')
@include('front.partial.index.HotNews')
@include('front.partial.index.TechnologyNews')
@include('front.partial.index.EditorChoice')
    <!-- =======================
Section END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
