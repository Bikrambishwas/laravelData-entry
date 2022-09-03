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
    {{-- show --}}
    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <address>
                    name :{{ $student->fullname}} <br>
                    address :{{ $student->address}} <br>
                    mobile :{{ $student->mobile}} <br>
                    school :{{ $student->school}} <br>
                    refer :{{ $student->refer}} <br>
                </address>
            </div>
        </div>
    </div>
</body>
</html>