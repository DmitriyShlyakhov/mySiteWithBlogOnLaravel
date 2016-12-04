@include('layouts.headerLink')

<div class="comments">
    <h2>Comments</h2>
    @foreach($messages as $message)
        <div class="comment">
            <a class="pull-left" href="javascript:;">
                <img class="comments-object" src="/img/avatar.jpg" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">
                    {{ $message->name }}
                </h4>
                <p>
                    {{ $message->message }}
                </p>
            </div>
        </div>
    @endforeach
    <div class="text-center">
        {!! $messages->render() !!}
    </div>
</div>

<div class="post-comment">
    <h2>Post Comments</h2>
    <div class="container">
        <form method="post" id="form" class="form-horizontal center-block" role="form">
            <div class="form-group comment-name">
                <div class="col-lg-12">
                    <label for="name">Name</label>
                    <input type="text" class="col-lg-12 form-control" name="name" id="name">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-12">
                    <label for="message">Message</label>
                            <textarea rows="4" class="form-control" id="message" name="message">
                            </textarea>
                </div>
            </div>
            <p>
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-info">
                    Post Comment
                </button>
            </p>
        </form>
    </div>
</div>

@include('layouts.footerLink')