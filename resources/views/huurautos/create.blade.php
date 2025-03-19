<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Huurauto</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto max-w-md mt-10 bg-white p-5 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center">Nieuwe Huurauto Toevoegen</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="automerk" class="block text-gray-700">Auto merk</label>
                <input type="text" id="automerk" name="automerk" placeholder="Auto merk" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="autotype" class="block text-gray-700">Auto type</label>
                <input type="text" id="autotype" name="autotype" placeholder="Auto type" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="autobouwjaar" class="block text-gray-700">Auto bouwjaar</label>
                <input type="text" id="autobouwjaar" name="autobouwjaar" placeholder="Auto bouwjaar" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Opslaan</button>
                <a href="{{ route('index') }}" class="text-blue-500 hover:underline">Terug</a>
            </div>
        </form>
    </div>
</body>
</html>