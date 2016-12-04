@extends('layouts.default')

@section('section')
    <section id="resume" class="s_resume bg_white">
        <div class="section_header">
            <h2>Blog</h2>
            <div class="s-descr_wrap">
                <div class="s_descr">List of publications in the blog</div>
            </div>
        </div>
        <div class="section_content">
            <div class="resume_container">
                @foreach($records as $item)
                    <div class="row blog-item">
                        <div class="col-md-6 col-sm-6 left">
                            <img src="/uploads/blog/medium/{{ $item->image }}">
                        </div>
                        <div class="col-md-6 col-sm-6 right">
                            <h2>{{ $item->title }}</h2>
                            <div class="content">
                                {!! mb_substr(strip_tags($item->body), 0, 400) !!}...
                            </div>
                            <a href="/blog/{{ $item->slug }}">Читать больше</a>
                        </div>
                    </div>
                @endforeach
                <div class="my-pagination">
                    <?php echo $records->render(); ?>
                </div>
            </div>
        </div>
    </section>
@endsection

