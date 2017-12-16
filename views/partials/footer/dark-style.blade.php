<footer class="footer-dark">
    <div class="footer-widgets footer-body dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget m-top-0">
                        <div class="logo m-bot-10">
                            <a href="{{ url(locale()) }}"><img src="{!! Theme::url('img/logo-white.svg') !!}" alt="{{ setting('themes::company-name') }}"/></a>
                        </div>
                        <address class="pull-left m-top-5 p-lft-10">
                            {!! setting('theme::address') !!}<br>
                            <abbr title="Telefon">T:</abbr> {{ setting('theme::phone') }}<br/>
                            <abbr title="Mobil">M:</abbr> {{ setting('theme::phone2') }}<br/>
                            <abbr title="Email">E:</abbr> {{ HTML::email(setting('theme::email')) }}
                        </address>
                        <ul class="social-icons">
                            @if(setting('theme::facebook'))
                            <li><a target="_blank" href="{{ setting('theme::facebook') }}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(setting('theme::twitter'))
                            <li><a target="_blank" href="{{ setting('theme::facebook') }}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if(setting('theme::instagram'))
                            <li><a target="_blank" href="{{ setting('theme::facebook') }}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            @endif
                            @if(setting('theme::pinterest'))
                            <li><a target="_blank" href="{{ setting('theme::facebook') }}" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">{!! trans('themes::theme.footer.titles.link 1') !!}</h4>
                        {!! Menu::render('rental1', \Themes\Kentacar\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-categories">
                        <h4 class="widget-title">{!! trans('themes::theme.footer.titles.link 2') !!}</h4>
                        {!! Menu::render('rental2', \Themes\Kentacar\Presenter\FooterMenuLinksPresenter::class) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget widget-tag-cloud">
                        <h4 class="widget-title">{!! trans('themes::theme.footer.titles.tag') !!}</h4>
                        <ul>
                            @foreach(Blog::latest(20) as $latest)
                                <?php $tag = $latest->tags()->first(); ?>
                                @if($tag)
                                    <li><a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer-meta dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright">{{ trans('themes::theme.copyrights') }}&copy; {{ setting('theme::company-name') }}</div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

@push('css_inline')
<style>
.footer-dark .widget-links ul li {
	margin-bottom: 5px !important;
	line-height:16px !important;
	list-style-type: circle;
	list-style-position: outside;
}
</style>
@endpush