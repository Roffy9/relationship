<h2>Product Name: </h2>
<p><b>Product is : </b> {{ $product->name }} </p>

<p><b>Price is : </b>${{  $product->price }}</p>
<h3>Product Belongs to</h3>

<ul>
    @foreach($product->categories as $category)
    <li>{{ $category->title }}</li>
    @endforeach
</ul>