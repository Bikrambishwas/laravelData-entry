<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DATA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    {{-- card --}}
    <div class="container my-3">
       <div class="row">
          <div class="col-md-12">
            <form action="/student" method="post">
                @csrf
                    <a href="/" class="btn btn-primary">Back</a>
                    
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" placeholder="Enter your fullname" required>
                   </div>

                   <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" class="form-control" type="text" name="address" placeholder="Enter your Address" required>
                   </div>
                   
                   <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input id="mobile" class="form-control" type="text" name="mobile" placeholder="Enter your mobile number" required>
                   </div>

                   
                   <div class="form-group">
                    <label for="school">School</label>
                    <input id="school" class="form-control" type="text" name="school" placeholder="School Name">
                   </div>

                   
                   <div class="form-group">
                    <label for="refer">Refer by</label>
                    <input id="refer" class="form-control" type="text" name="refer" placeholder="Refered By">
                   </div>

                   <button type="submit" class="btn btn-primary">submit</button>

            </form>
          </div>
       </div>
    </div>
</body>
</html>