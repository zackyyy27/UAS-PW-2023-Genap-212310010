    <div class="row" style="justify-content:center">
        @foreach ($product1 as $product)
            <div class="col-md-3 col-sm-6 shadow rounded my-3 mx-3 d-flex justify-content-between text-center p-3"
                style="justify-content:center; flex-direction:column; align-items:center">
                <div class="row" style="justify-content:center">
                    <img src="{{ url('./assets/media/uploads/products/' . $product->pictures) }}" class="img rounded"
                        style="height: 150px; width:150px; border-radius:100%; margin-right:5px">
                    <span>{{ $product->names }}</span><br>
                    <span>{{ $product->descs }}</span>
                </div>
                <div class="mt-2">
                    <span style="font-size: 20px; font-weight:bold">{{ $product->prices }}</span>
                </div>
            </div>
        @endforeach
    </div>
