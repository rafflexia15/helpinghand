@section('title', 'Masuk | Helping Hand')

<!doctype html>
<html lang="en">
  <head>
    @include('includes.head')
  </head>
  <body>
    <!-- Body -->

    <div class="wrapper fadeInDown">
    <div id="formContent">
        <div id="formHeader">
        <a class="underlineLeft" href="{{ url('/') }}">Kembali</a>
        </div>
        <!-- Tabs Titles -->

        <h2>Helping Hand</h2>

        <!-- Icon -->
        <div class="fadeIn first">
        <img class="logo" src="/assets/img/logo.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="alamat@email.com">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="btn btn-primary tombol" value="Log In">
        <a href="#" class="btn btn-primary tombol">Register</a>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>

    <!-- End of Body -->
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>