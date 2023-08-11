<x-layout>

        {{-- INIZIO HEADER --}}
        <header class="container-fluid bg-header vh-100">
            <div class="row flex-column align-items-center justify-content-center vh-100">
                <div class="col-12 text-white text-center">
                    <h2 class="display-5 italic-custom mt-5">Our Products</h2>
                    <a href="#products">
                        <button type="button" class="btn btn-warning btn-custom">Show products</button>
                    </a>
                </div>
            </div>
        </header>
        {{-- FINE HEADER --}}


        {{-- INIZIO MAIN --}}
        <main>
            {{-- INIZIO PRIMA SECTION CON CARD PRODOTTI CARICATI --}}
            <section id="products" class="mt-5 bg-light pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mt-5">
                            <h3 class="display-4 text-uppercase">Products</h3>
                            <p class="italic-custom lead">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        @if($products->isNotEmpty())
                            @foreach ($products as $product)
                                <div class="col-12 col-md-6 col-lg-4 mt-4">
                                    <div class="card-custom">
                                        <img class="imgProduct-custom" src="{{Storage::url($product['img'])}}" alt="">
                                        <div class="text-center mt-3 pb-2">
                                            <p class="h4">{{$product['nameProduct']}}</p>
                                            <p class="lead italic-custom">{{$product['brand']}}</p>
                                            <p class="lead italic-custom">{{$product['description']}}</p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-around">
                                            <a href="{{route('products.show', compact('product'))}}" class="btn btn-warning">Maggiori dettagli</a>
                                            <a href="{{route('products.update', compact('product'))}}" class="btn btn-warning">Modifica</a>
                                            <form method="POST" action="{{route('product.delete', compact('product'))}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-warning">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
            {{-- FINE PRIMA SECTION --}}
        </main>
        {{-- FINE MAIN --}}

</x-layout>