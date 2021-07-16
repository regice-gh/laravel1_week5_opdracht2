<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huurautos</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="m-auto w-6/12">
        <div class="grid grid-cols-12 bg-blue-100 p-10">
            @foreach($data as $huurauto) 
                <diV class="col-span-5">{{ Str::upper($huurauto->automerk) }}</div>
                <div class="col-span-5">{{ Str::upper($huurauto->autotype) }}</div> 
                <div class="col-span-2">{{ $huurauto->autobouwjaar }}</div> 
            @endforeach
        </div>
    </div>   
</body>
</html>