<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huurautos</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-6 text-center">Huurauto Overzicht</h1>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="py-3 px-4 border">Automerk</th>
                            <th class="py-3 px-4 border">Autotype</th>
                            <th class="py-3 px-4 border">Autobouwjaar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $huurauto)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 border">{{ Str::upper($huurauto->automerk) }}</td>
                            <td class="py-3 px-4 border">{{ Str::upper($huurauto->autotype) }}</td>
                            <td class="py-3 px-4 border">{{ $huurauto->autobouwjaar }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Nieuwe auto toevoegen
                </a>
            </div>
        </div>
    </div>
</body>
</html>