<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    @include('admin.css')

    <style type="text/css">

      label {
        display: inline-block;
        width: 200px;
        font-size: 15px;
        font-weight: bold;
        margin-top: 30px;
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
      
    <!-- container-scroller -->
    <!-- plugins:js -->

    <div class="main-panel">
        <div class="content-wrapper">

        <h1 style="text-align: center; font-size: 25px;">Send Email to {{$order->email}}</h1>
        
        <form action="{{url('send_user_email',$order->id)}}" method="POST">

          @csrf
          <div style="padding-left: 35%;">
            <label>Email Greetings : </label>

            <input style="color: black;" type="text" name="greeting">
          </div>

          <div style="padding-left: 35%;">
            <label>Email FirstLine : </label>

            <input style="color: black;" type="text" name="firstline">
          </div>

          <div style="padding-left: 35%;">
            <label>Email Body : </label>

            <input style="color: black;" type="text" name="body">
          </div>

          <div style="padding-left: 35%;">
            <label>Email Button Name : </label>

            <input style="color: black;" type="text" name="button">
          </div>

          <div style="padding-left: 35%;">
            <label>Email Url : </label>

            <input style="color: black;" type="text" name="url">
          </div>

          <div style="padding-left: 35%;">
            <label>Email Last Line : </label>

            <input style="color: black;" type="text" name="lastline">
          </div>

          <div style="padding-left: 35%;">

            <input style="color: black;" type="submit" value="Send Email" class="btn btn-primary">
          </div>
        </form>

        </div>
      </div>

    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>