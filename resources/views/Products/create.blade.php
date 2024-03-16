<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @vite('resources/css/app.css')
</head>
<body>
<div>
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
</div>

    <h1 class="text-3xl ont-bold text-center mb-4">Creat Product</h1>
    <form action="{{route('Product.store')}}" method="post">
        @csrf
       
        <label for="name" class=" text-gray-700 font-medium ">Name:</label>
        <input type="text"  name="Name" required class="shadow-sm rounded-md text-gray-700 border border-gray-300"><br><br>
      
        <label for="Qty" class=" text-gray-700 font-medium ">Quantity:</label>
        <input type="number"  name="Qty" min="1" required class="shadow-sm rounded-md  text-gray-700 border border-gray-300"><br><br>
      
        <label for="price" class=" text-gray-700 font-medium">Price:</label>
        <input type="text" name="price" class="shadow-sm rounded-md  text-gray-700 border border-gray-300"><br><br>      
        <input type="submit" value="Submit" class="px-4 py-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700">
      </form>      
</body>
</html>