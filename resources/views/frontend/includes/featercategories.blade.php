<?php 
    use App\Models\Backend\Categories\Categories;
    use App\Models\Backend\Subcategories\Subcategories;
    use App\Models\Backend\Products\Products;
    

?>
    @php 
    $categories = Categories::all();
    @endphp
<section class="popular-categories section-padding">
    <div class="container wow animate__animated animate__fadeIn">
        <div class="section-title">
            <div class="title">
                <h3>Featured Categories</h3>
                {{-- <ul class="list-inline nav nav-tabs links">
                    @foreach($categories as $category)
                    <li class="list-inline-item nav-item p-3"><a class="nav-link text-capitalize" href="shop-grid-right.html">{{ $category->name}}</a></li>
                    @endforeach
                </ul> --}}
            </div>
            <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows"></div>
        </div> 
       
        
        <div class="carausel-10-columns-cover position-relative">
           
            <div class="carausel-10-columns" id="carausel-10-columns">
                @foreach($categories as $category)
                <div class="card-2 bg-9 wow animate__animated animate__fadeInUp" data-wow-delay=".1s">
                    <figure class="img-hover-scale overflow-hidden">
                        <a href="shop-grid-right.html"><img src="{{asset('backend/img/categories/'.$category->pic)}}" alt=""></a>
                    </figure>
                    <h6><a href="shop-grid-right.html" class="text-capitalize">{{$category->name}}</a></h6>
                     @php 
                     $products= Products::where('cat_id',$category->id)->get('quantity');
                     
                    @endphp 
                    
                     @foreach($products as $product)
                    <span>{{$product->quantity}}</span>
                    @endforeach 
                </div>
                @endforeach
            </div>
           

        </div>
      
    </div>
</section>
<!--End category slider-->