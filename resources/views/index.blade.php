@include('header')
@isset($result)
<div class="py-2 px-4">
    {{ $result }}
</div>
@endisset()

@include('nav')
@include('methods')
@include('footer')