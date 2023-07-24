    <div class="col-12 border border-dark p-2 mb-2 border-opacity-25 my-3">
        <h5 class="mt-3 me-3" style="font-weight: bold">Menu Snack</h5>
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
                @if ($product3->count() > 0)

                    @foreach ($product3 as $product)
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
                                        onclick="return confirm('are you sure?')">remove</button>
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

    {{-- @foreach ($menus as $menu)
    <tr>
        <td>{{ $menu->id }}</td>
        <td>{{ $menu->nama_menu }}</td>
        <td>{{ $menu->harga }}</td>
        <td>{{ $menu->deskripsi }}</td>
        <td>{{ $menu->kategori }}</td>
        <td><img style="width: 400px" src="images/{{ $menu->images }}" alt=""></td>
        <td>{{ $menu->status }}</td>
        <td>
            <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-sm btn-primary">Edit</a>
            <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach --}}

    {{-- public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file = $request->file('image');
            $newFilename = time() . "-" . preg_replace('/\s+/', '-', $request->nama_menu) . ".jpg";
            $file->move(public_path('images'), $newFilename);
            $request->merge(['images' => $newFilename]);
        }

        $menu->update($request->all());

        return redirect()->route('menu.index')
            ->with('success', 'Menu updated successfully.');
    } --}}
