<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commercial Project</title>

   <!-- Latest compiled and minified CSS -->
   <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Optional theme -->
<!-- running offline-->
<link rel="stylesheet" href="bootsrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="bootstrap.min.js">

</script>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}

</body>
<!--<script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("hello ")
        })
    })
    </script>-->
   <style>
      .custom-login{
        height: 500px;
        padding-top: 100px

}
img.slider-img{
    height: 400px !important;
}
.custom-product{
    height:600px;
}
.slider-text{
    background-color: #1d1e1d !important;
}
.trending-image{
    height: 100px;
}
.trending-item{
    float:left;
    width:25%;
}
.trending-wrapper{
    margin: 30px;
}
.detail-img{
    height: 200px;
}
.search-box{
    width: 500px !important;
}
.cart-list-divider{
    border-bottom:1px solid #cccccc;
    margin-bottom: 20px;
    padding-bottom: 20px;
}
.foot {
  text-align: center;
  padding: 3px;
  background-color: darkgray;
  color: white;
}
   </style>
</html>
