<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>
<body>


    <div class="flex justify-between items-center ">
        <h1 class="text-3xl ont-bold">Products</h1>
        <a href="/Products/create" class="text-blue-500 hover:text-blue-700">Create Product</a>
      </div> 
@if (count($Products) > 0)
<table class="table-auto border border-black">

    <tr class="text-center ">
        <th>Name</th>
        <th>Qty</th>
        <th>Price</th>
    </tr> 

    @foreach ($Products as $product)
    <tr class="">
        <td class="px-4 py-2 border border-black">{{$product->Name}}</td>
        <td class="px-4 py-2 border border-black">{{$product->Qty}}</td>
        <td class="px-4 py-2 border border-black">{{$product->price}}</td>
        <td class="px-4 py-2 border border-black">
            <a href="{{route('Products.edite',["product"=>$product->id])}}" class="text-blue-500">Edite </a>
            |<a href="/Products/{{$product->id}}" class="text-red-500"> Delete</a></td>
    </tr>    
    @endforeach   
    </table>
@else
    <p>You don't have any Product </p>
@endif

       
    
</body>
</html>