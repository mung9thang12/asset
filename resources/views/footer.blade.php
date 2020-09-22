@foreach ($bodyScripts as $script)
    {!! Asset::getHtmlBuilder()->script($script['src'] . Asset::getBuildVersion(), $script['attributes']) !!}
@endforeach