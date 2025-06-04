<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.jpg" type="">
      <title>Afrinet Telecom</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('home/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <link href="{{asset('home/css/responsive.css')}}" rel="stylesheet" />

      <style type="text/css">

        .center {
          margin: auto;
          width: 80%;
          text-align: center;
          padding: 30px;
        }

        .table,th,td {
          border: 1px solid grey;
        }

        .th_deg {
          font-size: 23px;
          padding: 5px;
          background: skyblue;
        }

        .img_deg {
          height: 100px;
          width: 150px
        }

        .total_deg {
          font-size: 20px;
          padding: 40px;
        }

      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
        
         <!-- end slider section -->

         @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif
      
      
      <div class="center">

        <table class="center">
          
         <tr>
           <th class="th_deg">Product title</th>
           <th class="th_deg">Product quantity</th>
           <th class="th_deg">Price</th>
           <th class="th_deg">Image</th>
           <th class="th_deg">Action</th>
         </tr>

         <?php $totalprice=0; ?>

          @foreach($cart as $cart)

            <tr>
              <td>{{$cart->product_title}}</td>
              <td>{{$cart->quantity}}</td>
              <td>KSh {{$cart->price}}</td>
              <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
              <td><a class="btn btn-danger" onClick="return confirm('Are Sure To Remove This Product?')" href="{{url('/remove_cart',$cart->id)}}">Remove</a></td>
              
            </tr>

            <?php $totalprice=$totalprice + $cart->price ?>

          @endforeach

          
        </table>

        <div>

         <h1 class="total_deg">Total Price: KSh {{$totalprice}}</h1>

        </div>

        <div>

          <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to Order</h1>

          <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>

          <a href="{{url('stripe',$totalprice)}}"class="btn btn-danger">Pay Using Card</a>

        </div>
      </div>

      
      <div class="cpy_">
         <p class="mx-auto">© Afrinet Telecom Limited - 2025 All Rights Reserved 
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>