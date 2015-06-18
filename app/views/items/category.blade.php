@foreach($items as $item)
<div class="col-xs-4">
    <div class="portfolio-item">
        <div class="item-inner">
            <img class="img-responsive" src="assets/images/items/{{ $item->category }}.jpg" alt="">
            <h5>
                {{ $item->name }}
            </h5>
            <h6> {{ $item->category }} </h6>
            <h6> Php {{$item->price}} </h6>
        </div>
    </div>
</div>                            
@endforeach
