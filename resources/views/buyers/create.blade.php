<form action="{{url('/save')}}" method="POST">

  @if(session('message'))

     <p class = "alert alert-success">
      {{session('message')}}
     </p>
     @endif
     <br>

  {{csrf_field()}}


    <div class="mb-3">
    <label for="example" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="example">
  </div><br><br>
   <div class="mb-3">
    <label for="example" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="example">
  </div><br><br>
   <div class="mb-3">
    <label for="example" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Product</label>
    <input type="text" name="product" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Product_key</label>
    <input type="text" name="product_key" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Package_name</label>
    <input type="text" name="package_name" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Verification_status</label>
    <input type="text" name="verification_status" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">License_type</label>
    <input type="text" name="license_type" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Purchase_from</label>
    <input type="text" name="purchase_from" class="form-control" id="example">
  </div><br><br>
  <div class="mb-3">
    <label for="example" class="form-label">Purchase_date</label>
    <input type="text" name="purchase_date" class="form-control" id="example">
  </div><br><br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>