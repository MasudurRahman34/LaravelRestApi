<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
  <h2 style="padding-bottom: 10px ; padding-top: 10px;" >Form</h2>

  <form action="{{ route('store.data') }}" method="post">
     @csrf

    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name[][f]">
    </div>
    <div class="form-group">
      <label for="pwd">InCome:</label>
      <input type="text" class="form-control" placeholder="Enter password" name="income[][f]">
    </div>
    <div class="form-group">
      <label for="email">Mother Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name[][m]">
    </div>
    <div class="form-group">
      <label for="pwd">InCome:</label>
      <input type="text" class="form-control" placeholder="icome" name="income" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{asset('js/popper.min.js')}}" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>