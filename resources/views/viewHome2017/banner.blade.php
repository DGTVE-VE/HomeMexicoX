<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 60px;">
{{--*/$numBanners = sizeof($imagenBanner)/*--}}
    <ol class="carousel-indicators">
    @for($i=0; $i < $numBanners; $i++)
        @if($i==0)
            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}" class="active"></li>
        @else
            <li data-target="#carousel-example-generic" data-slide-to="{{$i}}"></li>
        @endif
    @endfor
    </ol>
    
    <div class="carousel-inner" role="listbox">
    {{--*/ $i=0 /*--}}
    @foreach($imagenBanner as $banner)
        @if($i==0)
            <div class="item active">
            {{--*/ $i++ /*--}}
        @else
            <div class="item">
        @endif
        @if(!empty($banner->ligaHref))
            <a href="{{$banner->ligaHref}}" target="_blank">
        @endif
        <img src="http://reportes.mexicox.gob.mx/{{$banner->url_imagen}}"  alt="" class="imgBanner">
        @if(!empty($banner->ligaHref))
            </a>
        @endif
        </div>
    @endforeach
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<style>
    .imgBanner{
        width:100%;
    }
</style>
<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>