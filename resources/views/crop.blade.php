<x-layout>
    @if (isset($error))
    <x-slot name="error">{{ $error }}</x-slot>
    @endif
    <x-slot name="step">{{ $step }}</x-slot>

    <div id="container" style="width: {{ $widthImage }}px; height: {{ $heightImage }}px;">
        <img src="{{ $urlImage }}" />
        <div id="layer-out"></div>
        <div id="layer-in" style="width: {{ $width }}px; height: {{ $height }}px; background-image: url({{ $urlImage }});"></div>
    </div>

    <form action="{{ $urlNext }}">
        <input type="hidden" name="x" id="x" />
        <input type="hidden" name="y" id="y" />
        <input type="hidden" name="width" value="{{ $width }}" />
        <input type="hidden" name="height" value="{{ $height }}" />
        <input type="hidden" name="crop" value="{{ true }}" />
        <input type="hidden" name="resize" value="{{ $resize }}" />
        <p class="next">
            <a class="button" href="{{ $urlPrevious }}"><i class='fa fa-chevron-left'></i> Previous</a>
            <button type="submit">Download <i class='fa fa-download'></i></button>
        <p>
    </form>
</x-layout>
