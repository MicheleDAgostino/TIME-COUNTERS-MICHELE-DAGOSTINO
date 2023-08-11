<x-layout>

        {{-- INIZIO HEADER --}}
        <header class="container-fluid bg-header vh-100">
            <div class="row flex-column align-items-center justify-content-center vh-100">
                <div class="col-12 text-white text-center">
                    <h2 class="display-5 italic-custom mt-5">Time Counters</h2>
                </div>
            </div>
        </header>
        {{-- FINE HEADER --}}

        {{-- INIZIO MAIN --}}
        <main>
            {{-- INIZIO SECTION CON FORM DI MODIFICA --}}
            <section class="container">
                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-12 col-md-6">
                        <div class="text-center">
                            <h3 class="display-4 text-uppercase text-white">Update product</h3>
                        </div>
                        <form method="POST" action="{{route('product.edit', compact('product'))}}" enctype="multipart/form-data" class=" d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                              <input name="nameProduct" type="text" placeholder="Name" class="@error('nameProduct') is-invalid @enderror" value="{{$product->nameProduct}}">
                                @error('nameProduct')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <input name="brand" type="text" placeholder="Brand product" class="@error('brand') is-invalid @enderror" value="{{$product->brand}}">
                                @error('brand')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <textarea name="description" id="" cols="60" rows="5" placeholder="Description" class="@error('description') is-invalid @enderror">{{$product->description}}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label class="lead">Current Image:</label>
                                <img src="{{Storage::url($product->img)}}" alt="" width="150px" height="150px">
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <label class="text-white text-center lead text-uppercase">Insert image</label>
                                <input class="inputImg-custom @error('description') is-invalid @enderror" name="img" type="file">
                                @error('img')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning mt-4 btn-custom">EDIT</button>
                          </form>
                    </div>
            </section>
            {{-- FINE SECTION --}}
        </main>
        {{-- FINE MAIN --}}

</x-layout>