@foreach ($styles as $style)
    {!! Asset::getHtmlBuilder()->style($style['src'] . Asset::getBuildVersion(), $style['attributes']) !!}
@endforeach

@foreach ($headScripts as $script)
    {!! Asset::getHtmlBuilder()->script($script['src'] . Asset::getBuildVersion(), $script['attributes']) !!}
    @if (!empty($script['fallback']))
        <script>window.{!! $script['fallback'] !!} || document.write('<script src="{{ $script['fallbackURL'] }}"><\/script>')</script>
    @endif
@endforeach