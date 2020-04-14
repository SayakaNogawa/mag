@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @include('partials.category-feature')
  @include('partials.category-collection')
  @include('partials.category-blog')
  @include('partials.category-trend')
  @include('partials.category-coordinate')
  @include('partials.category-interview')


@endsection