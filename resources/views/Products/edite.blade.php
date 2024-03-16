<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Update</title>
</head>
<body>
    
   <h1 class="text-3xl ont-bold text-center mb-4">Update Product</h1>
    <form action="{{route('Products.update',["product"=>$Products])}}" method='post'>
        @csrf
       @method('put')
        <label for="name" class=" text-gray-700 font-medium ">Name:</label>
        <input type="text"  name="Name" required class=" rounded-md text-gray-700 border border-gray-300" value="{{$Products->Name}}"><br><br>
      
        <label for="Qty" class=" text-gray-700 font-medium ">Quantity:</label>
        <input type="number"  name="Qty" min="1" required class=" rounded-md  text-gray-700 border border-gray-300" value="{{$Products->Qty}}"><br><br>
      
        <label for="price" class=" text-gray-700 font-medium">Price:</label>
        <input type="text" name="price" class=" rounded-md  text-gray-700 border border-gray-300" value="{{$Products->price}}"><br><br>

        <input type="submit" value="Update" class="px-4 py-2 bg-indigo-500 text-white font-bold rounded-md hover:bg-indigo-700">
      </form>   

</body>
</html>