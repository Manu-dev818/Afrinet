<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

     .title_deg {
      text-align: center;
      font-size: 25px;
      font-weight: bold;
      padding-bottom: 40px;
     }

     .table_deg {
      border: 1px solid white;
      width: 100%;
      margin: auto;
      font-size: 13px;
      
      text-align: center;
     }

     .th_deg {
      background-color: skyblue;
      color: black;
     }

     .img_size {
      width: 140px;
      height: 70px;
     }

    </style>
  </head>
  
  <body>
    <div class="container-scroller">
      
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">


        
        <h1 class="title_deg">All Orders</h1>

        <div style="padding-left: 400px; padding-bottom: 30px;">

          <form action="{{url('search')}}" method="get">

            <input type="text" style="color:black;" name="search" placeholder="Search For Something">

            <input type="submit" value="search" class="btn btn-outline-primary">

          </form>

        </div>

        <table class="table_deg">

          <tr class="th_deg">

            <th style="padding:10px;">Name</th>
            <th style="padding:10px;">Email</th>
            <th style="padding:10px;">Address</th>
            <th style="padding:10px;">Phone</th>
            <th style="padding:10px;">Product Title</th>
            <th style="padding:10px;">Quantity</th>
            <th style="padding:10px;">Price</th>
            <th style="padding:10px;">Payment Status</th>
            <th style="padding:10px;">Delivery Status</th>
            <th style="padding:10px;">Image</th>
            <th style="padding:10px;">Delivery</th>
            <th style="padding:10px;">Print PDF</th>
            <th style="padding:10px;">Send Email</th>

          </tr>

          @forelse($order as $order)

          <tr>

           <td>{{$order->name}}</td>
           <td>{{$order->email}}</td>
           <td>{{$order->address}}</td>
           <td>{{$order->phone}}</td>
           <td>{{$order->product_title}}</td>
           <td>{{$order->quantity}}</td>
           <td>{{$order->price}}</td>
           <td>{{$order->payment_status}}</td>
           <td>{{$order->delivery_status}}</td>
           <td><img class="img_size" src="/product/{{$order->image}}"></td>

            <td>

              @if($order->delivery_status=='processing')

                <a href="{{url('delivered',$order->id)}}" onClick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Deliver</a>

              @else

                <p style="color: green;">Delivered</p>

              @endif
            </td>

            <td>
              <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
            </td>

            <td>

            <a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send</a>

            </td>

          </tr>

          @empty

          <tr>
            <td colspan="16">
              No Data Found
            </td>
          </tr>

          @endforelse

        </table>

        </div>

      </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>