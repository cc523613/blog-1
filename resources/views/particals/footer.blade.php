<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="row content">
            <div class="col-md-4 offset-md-4">
                <ul class="connect">
                    <li class="mx-2">
                        <a href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    @if(config('blog.footer.github.open'))
                    <li class="mx-2">
                        <a href="{{ config('blog.footer.github.url') }}" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                    </li>
                    @endif
                </ul>
                <!--<div class="links">
                    <a href="{{ url('link') }}">{{ lang('Links') }}</a> 
                </div> -->
            </div>
        </div>
    </div>
    <div class="copy-right text-center">
        <span>{!! config('blog.footer.meta') !!}本网站由<a href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral" rel=“nofollow”><img src="/images/upyun_logos/又拍云_logo7.png"  width="30" height="30"></a>提供CDN加速/云存储服务</span>
    </div>
</footer>
