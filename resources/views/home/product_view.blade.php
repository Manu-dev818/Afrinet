<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               

               <div>
                  <form action="{{url('search_product')}}" method="GET">

                    @csrf
                     <input style="width: 500px;" type="text" name="search" placeholder="Search">

                     <input type="submit" value="search">
                  </form>
               </div>

            </div>

            @if(Session::has('message'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ Session::get('message') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            @endif

            <div class="row">

              @foreach($product as $products)

                  <div class="col-sm-6 col-md-4 col-lg-4">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="{{url('product_details',$products->id)}}" class="option1">
                              Product Details
                              </a>

                              <form action="{{url('add_cart',$products->id)}}" method="post">

                                 @csrf
                                 <div class="row">

                                   <div class="col-md-4">

                                     <input style="border-radius: 20px;" type="number" name="quantity" value="1" min="1" style="width: 100px;">
                                   </div>

                                    <div class="col-md-4">
                                     <input style="border-radius: 30px;" type="submit" value="Add To Cart">
                                    </div>
                                 </div>
                              </form>
                              
                           </div>
                        </div>
                        <div class="img-box">
                           <img  src="product/{{$products->image}}" alt="">
                        </div>
                        <div class="detail-box">
                           <h5>
                              {{$products->title}}
                           </h5>

                           @if($products->discount_price!=null)
                           <h6 style="color: red;">
                              Discount price
                              <br>
                            KSh {{$products->discount_price}}  
                           </h6>

                           <h6 style="text-decoration: line-through; color: blue;">
                              Price
                              <br>
                            KSh {{$products->price}}  
                           </h6>

                           @else 

                           <h6 style="color: blue;">
                              Price
                              <br>
                            KSh {{$products->price}}  
                           </h6>

                           @endif

                           
                        </div>
                     </div>
                  </div>

               @endforeach

               <span style="padding-top: 20px;">

               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

               </span>
            
         </div>
      </section>