<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mualim</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/largesize.css') }}">
    <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 660px)" href="{{ asset('/css/mediumsize.css') }}">
    <link rel="stylesheet" media="screen and (max-width: 660px)" href="{{ asset('/css/smallsize.css') }}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="col-md-12 col-sm-12 col-xs-12">
                <a class="text-subtitle">Mualim</a> &nbsp; &nbsp; &nbsp; &nbsp;
              
                <a href="/" class="text-right">Login</a> 
        </div>
    </header>
    <!-- End of Header -->

    <!-- Body -->
    <section id="body">
        <div class="col-lg-12 col-md-12 col-sm-12 body">
            
            <!-- Content -->
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                <section id="content-1">
                    <div class="col-md-12 col-sm-12 col-xs-12 box-1-alquran" style="margin-left: 400px;margin-top: 20px;"> 
                        <p class="text-title-box text-center">Admin Login</p>
                        <br>
                        <form method="get" action="/login_process">
                            {{ csrf_field() }}
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="inputNoSurah">Email</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>
                            <div class="form-group col-lg-12 col-md-12">
                                <label for="inputNoSurah">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            @if($errors->any())
                              <h6 style="color:red;" align="center">{{$errors->first()}}</h6>
                            @endif
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- End of Content -->
        </div>
    </section>
</body>
</html>