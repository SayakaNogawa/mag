@extends('layouts.app')

@section('content')
  <div class="container">

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @include('partials.category-archive')

    {!! get_the_posts_navigation() !!}
    </div>
@endsection
