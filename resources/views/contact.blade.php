<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}} type="image/x-icon">
        <title>FanTravel 出行意向登记</title>

        <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
   
        <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">


        <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" href="{{URL::asset('favicon-32x32.png')}}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{URL::asset('favicon-16x16.png')}}" sizes="16x16">
        <link rel="manifest" href="{{URL::asset('manifest.json')}}">
        <link rel="mask-icon" href="{{URL::asset('safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">        
    </head>

    <body>
    <div style='margin:0 auto;width:0px;height:0px;overflow:hidden;'>
     <img src="{{URL::asset('img/logo.png')}}" width='700'>
    </div>
   <div class="container">
        <div class="row logo">
            <img  class="img-responsive center-block" src="{{URL::asset('img/logo.png')}}" alt="FanTravel LOGO">
        </div>
        <div class="row text-center">
            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                <p>出行意向登记表</p>

            </div>
        </div><!--//row-->
        <div class="row text-center content">
            <div class="contact-form col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                @if(Session::has('success'))
                    <div>
                        <p class="alert alert-success">{{Session::get('success')}}</p>
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form class="form" method="POST">
                    <?php echo csrf_field(); ?>

                    <div class="form-group name">
                        <label class="sr-only" for="name" >姓名</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder="您的姓名">
                    </div>
                    <div class="form-group category">
                        <label class="sr-only" for="category">性别</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="" selected="selected">--您的性别--</option>
                            <option value="1">男生</option>
                            <option value="2">女生</option>
                        </select>                
                    </div>
                    <div class="form-group phone">
                        <label class="sr-only" for="email">电话</label>
                        <input id="phone" type="phone" class="form-control"  name="phone" placeholder="手机号">
                    </div>
                    <div class="form-group wechat">
                        <label class="sr-only" for="wechat">微信</label>
                        <input id="wechat" type="text" class="form-control"  name="wechat" placeholder="微信">
                    </div>
                    <div class="form-group destination">
                        <label class="sr-only" for="destination">出行目的地</label>
                        <input id="destination" type="text" class="form-control"  name="destination" placeholder="出行目的地">
                    </div>
                    <div class="form-group duration">
                        <label class="sr-only" for="duration">出行时间段</label>
                        <input id="duration" type="text" class="form-control"  name="duration" placeholder="大致出行时间">
                    </div>
                    <div class="form-group people">
                        <label class="sr-only" for="people">人数</label>
                        <input id="people" type="text" class="form-control"  name="people" placeholder="出行人数">
                    </div>

                    <div class="form-group others">
                        <label class="sr-only" for="text">其他要求</label>
                        <textarea id="others" class="form-control" rows="6"  name="others" placeholder="其他要求（可选）"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">提交</button>

                </form>

            </div>

        </div>
        <footer class="row text-center">
            <div id="copyright">© Copyright 2017 FanTravel</div>                 
        </footer>
        </div>        


    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    </body>
</html>
