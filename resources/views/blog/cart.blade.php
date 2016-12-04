@extends('layouts.default')

@section('section')
    <section id="resume" class="s_resume bg_white">
        <div class="section_header">
            <h2>{{ $record->title }}</h2>
        </div>
        <div class="section_content blog-item-content">
            <div class="content">
                <div class="resume_container">
                    <div class="row blog-item">
                        <div class="col-md-12 col-sm-12">
                            <img class="blog-img" src="/uploads/blog/medium/{{ $record->image }}" style="float: left" >
                            <p>{!! $record->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('blog.comments')
@endsection



