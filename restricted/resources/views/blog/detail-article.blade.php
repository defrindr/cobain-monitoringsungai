@extends('blog.layout')

@section('content')

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">
                    <p class="mb-5">
                        <img src="{{asset("storage/$article->image")}}" alt="{{ $article->title }}" class="img-fluid">
                    </p>
                    <h1 class="mb-4">
                        {{ $article->title }}
                    </h1>
                    <div class="post-meta d-flex mb-5">
                        <div class="bio-pic mr-3">
                            <img src="{{asset("public/blog/images/person_1.png")}}" alt="Image" class="img-fluidid" style="width: 100%; height: auto">
                        </div>
                        <div class="vcard">
                            <span class="d-block"><a href="#">Gayatri</a> in News</span>
                            <span class="date-read"> {{ date('M d, Y', strtotime($article->created_at)) }} <span class="mx-1">&bullet;</span><span
                                    class="icon-star2"></span><span class="icon-star2"></span><span
                                    class="icon-star2"></span></span>
                        </div>
                    </div>

                    <p align="justify">
                        {!! $article->content !!}
                    </p>
                <!-- ======= Post Populer ======= -->
                <div class="pt-5"></div>
            </div>
            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2>Berita Populer</h2>
                </div>

                @foreach ($popular as $index => $item)                    
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">{{ sprintf("%02d", $index + 1) }}</div>
                        <div class="trend-contents">
                            <h2>
                                <a href="{{ route('detail-article', $item->slug) }}">{{ $item->title }}</a>
                            </h2>
                            <div class="post-meta">
                                <span class="d-block"><a href="#">Gayatri</a> in News</span>
                                <span class="date-read"> 
                                    {{ date('M d, Y', strtotime($item->created_at)) }} 
                                    <span class="mx-1">&bullet;</span> 
                                    <span class="icon-star2"></span>
                                    <span class="icon-star2"></span>
                                    <span class="icon-star2"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
</div><!-- === Akhir Post Populer ==== -->
@endsection
