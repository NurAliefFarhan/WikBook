<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="{{asset('assets/user/css/style.css')}}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Print</title>
</head>
<body onload="window.print()">
    <div class="row" style="align-items: center; width:140%; margin-top:5%; margin-left: 13%;">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card" style="color: #000000">
            <div class="card-body">
                <img src="{{asset('storage/image/' . $libraries->image)}}" class="img-fluid" alt="" style="width: 20%; border-radius:3px;">
                
                <div class="data" style="margin-left:25%; margin-top:-25%;">
                    <h5 class="card-title">Judul: {{$libraries['title']}}</h5>
                    <p class="card-text">Penulis: {{$libraries['writer']}}</p>
                    <p class="card-text">Penerbit: {{$libraries['publisher']}}</p>
                    <p class="card-text">No ISBN: {{$libraries['isbn']}}</p>   
                    <p class="card-text"><b>Synopsis:</b> <br> {{$libraries['synopsis']}}</p>                                           
                    {{-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> --}}
                </div>
            </div>
          </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>