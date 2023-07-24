<div class="col-12 border border-dark p-2 mb-2 border-opacity-25 my-3">
    <h5 class="mt-3 me-3" style="font-weight: bold">Menu Minuman</h5>
    <table class="table">
        <thead class="thead">
            <tr class="border-0">
                <th scope="col" class="JudulCol" style="width: 20px">No</th>
                <th scope="col" class="JudulCol" style="width: 200px">Name</th>
                <th scope="col" class="JudulCol" style="width: 300px">Description</th>
                <th scope="col" class="JudulCol" style="width: 100px">Price</th>
                <th scope="col" class="JudulCol" style="width: 100px">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($product2->count() > 0)

                @foreach ($product2 as $product)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        {{-- <td>{{ $product->categori_id }}</td> --}}
                        <td style="display: flex; align-items: center; font-size:18px">
                            <img src="{{ url('./assets/media/uploads/products/' . $product->pictures) }}"
                                class="img rounded"
                                style="height: 50px; width:50px; border-radius:100%; margin-right:5px">
                            {{ $product->names }}
                        </td>
                        <td>{{ $product->descs }}</td>
                        <td style="font-weight: bold">IDR {{ $product->prices }}</td>
                        <td>
                            <a href="{{ url('/product/edit/' . $product->id) }}" class="badge text-bg-warning"><span
                                    data-feather="edit">edit</span></a>
                            <form action="/product/{{ $product->id }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure?')"><span>remove</span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Data tidak ada</td>
                </tr>
            @endif
        </tbody>
    </table>

</div>
