@extends('layouts.main')

@push('styles')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"></link>
@endpush

@push('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(function(){
            $('.user-box-container').slick()
        })
    </script>
@endpush

@section('content')
    <div class="user-box-container">
        @each('partials.user-box', $users, 'user')
    </div>
@endsection


