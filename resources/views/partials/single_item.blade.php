@forelse ($recently_sales as $recently_sale)
<div class="listing-item">
    <a href="{{route('sale.details', [$recently_sale->singleCategory->category->slug,$recently_sale->slug])}}">
        <article class="geodir-category-listing fl-wrap">
            <div class="geodir-category-img">

                @if(!empty($recently_sale->image))
                <img class="lazyload" loading="lazy"
                    src="{{asset('uploads/photos/thumbs/'.$recently_sale->image->filename)}}"
                    alt="{{$recently_sale->title}}">
                @else
                <img src="{{asset('assets/img/noimage.png')}}" alt="{{$recently_sale->title}}">
                @endif

                <div class="overlay"></div>
                <div class="list-post-counter" title="Views"><span>{{$recently_sale->visits}}</span><i
                        class="fa fa-eye"></i></div>
            </div>
            <div class="geodir-category-content fl-wrap">
                <h3>{{ucwords(str_limit($recently_sale->title,20))}}
                </h3>
                {{-- <p>57 milles</p> --}}
                <div class="geodir-category-options fl-wrap">
                    <div class="geodir-category-location">
                        {{$recently_sale->city}}, {{$recently_sale->state->name}}</div>
                </div>
            </div>
        </article>
    </a>
</div>
@empty @endforelse
