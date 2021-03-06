@extends('layouts.app')

@section('content')
    <section class="news">
        <div class="container"> 
            @include('layouts.bread')
            <div class="shop__main">
                <div class="shop-catalog">
                    <div class="shop-catalog__wrapper">
                    @if(count($posts))
                        @foreach($posts as $post)
                        <div class="shop-item">
                            <div class="shop-item__photo" style="background-image: url('..{{ $post->file }}');">
                            </div>
                            <div class="shop-item__info">
                                <div class="shop-item__header">
                                    <p>{{ $post->caption }}</p>
                                </div>
                                <div class="shop-item__buy">
                                    <div class="shop-item__buy-btn">
                                        <a href="{{ route('news.show', $post->caption) }}" class="btn">Read all</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        {{ $posts->links('layouts.paginate') }}
                    @else
                        Posts doesn't exist
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection