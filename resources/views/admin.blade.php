<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


    <div class="m-2 d-flex flex-row gap-2">
        @foreach ($allcontact as $contact)
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Artical Card</div>
            <div class="card-body">
              <h5 class="card-title">{{$contact->email}}</h5>
              <p class="card-text mb-0">{{$contact->description}}</p>
              <p class="card-text">{{$contact->message}}</p>
            </div>
          </div>
        @endforeach
        </div>
</body>
</html>