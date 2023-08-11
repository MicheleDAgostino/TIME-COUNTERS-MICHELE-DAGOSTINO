<x-layout>

    {{-- INIZIO HEADER --}}
    <header class="container-fluid bg-header vh-100">
        <div class="row flex-column align-items-center justify-content-center vh-100">
            <div class="col-12 text-white text-center">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                @guest
                <h2 class="display-5 italic-custom mt-5">Welcome to our website!</h2>
                @else
                <h1 class="display-3 text-custom mt-4 italic-custom">It's nice to meet you {{Auth::user()->name}}</h1>
                @endguest
                <a href="#services">
                    <button type="button" class="btn btn-warning btn-custom">Tell me more</button>
                </a>
            </div>
        </div>
    </header>
    {{-- FINE HEADER --}}

    {{-- INIZIO MAIN --}}
    <main>
        {{-- INIZIO PRIMA SECTION, SERVICES --}}
        <section id="services" class="container mt-5">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h3 class="display-4 text-uppercase">Services</h3>
                    <p class="italic-custom lead">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <div class="row mt-5 justify-content-around">
                    @foreach ($services as $service)
                    <div class="col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center justify-content-center">
                        <div class="circle-custom d-flex align-items-center justify-content-center">
                            <img class="imgCircle-custom" src="{{$service['img']}}" alt="">
                        </div>
                        <div class="text-center mt-3">
                            <p class="h4">{{$service['title']}}</p>
                            <p class="lead">{{$service['description']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- FINE PRIMA SECTION --}}

        {{-- INIZIO SECONDA SECTION PORTFOLIO CON CARD --}}
        <section id="portfolio" class="mt-5 bg-light pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mt-5">
                        <h3 class="display-4 text-uppercase">Portfolio</h3>
                        <p class="italic-custom lead">Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach ($projects as $project)
                    <div class="col-12 col-md-6 col-lg-4 mt-4">
                        <div class="card-custom">
                            <img class="img-fluid" src="{{$project['img']}}" alt="">
                            <div class="text-center mt-3 pb-2">
                                <p class="h4">{{$project['title']}}</p>
                                <p class="lead italic-custom">{{$project['task']}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- FINE SECONDA SECTION --}}

        {{-- INIZIO TERZA SECTION CON FORM --}}
        <section id="form" class="bg-form min-vh-100 mt-5">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-12 col-md-6">
                        <div class="text-center">
                            <h3 class="display-4 text-uppercase text-white">enter your products</h3>
                        </div>
                        <form method="POST" action="{{route('product.create')}}" enctype="multipart/form-data" class=" d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            <div class="mb-3">
                              <input name="nameProduct" type="text" placeholder="Name" class="@error('nameProduct') is-invalid @enderror" value="{{old('nameProduct')}}">
                                @error('nameProduct')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <input name="brand" type="text" placeholder="Brand product" class="@error('brand') is-invalid @enderror" value="{{old('brand')}}">
                                @error('brand')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <textarea name="description" id="" cols="60" rows="5" placeholder="Description" class="@error('description') is-invalid @enderror">{{old('description')}}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3 d-flex flex-column">
                                <label class="text-white text-center lead text-uppercase">Insert image</label>
                                <input class="inputImg-custom @error('description') is-invalid @enderror" name="img" type="file">
                                @error('img')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning mt-4 btn-custom">Insert</button>
                          </form>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="text-center">
                            <h3 class="display-4 text-uppercase text-white">leave a review</h3>
                        </div>
                        <form method="POST" action="{{route('leave.review')}}" class=" d-flex flex-column align-items-center justify-content-center">
                            @csrf
                            <div class="mb-3">
                              <input name="email" type="email" placeholder="user@youremail.com" class="@error('email') is-invalid @enderror" value="{{old('name')}}">
                                @error('email')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                              <input name="name" type="text" placeholder="Name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
                                @error('name')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <textarea name="comment" cols="60" rows="5" placeholder="Your review" class="@error('comment') is-invalid @enderror">{{old('comment')}}</textarea>
                                @error('comment')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-warning mt-4 btn-custom">Send</button>
                          </form>
                    </div>
                </div>
            </div>
        </section>
        {{-- FINE TERZA SECTION --}}

        {{-- INIZIO QUARTA SECTION CON SOCIAL --}}
        <section class="container-fluid my-5">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h3 class="display-4 text-uppercase">Our Social</h3>
                </div>
            </div>
            <div class="row justify-content-around">
                @foreach ($images as $image)
                    <div class="col-12 col-md-3 d-flex align-items-center justify-content-center mt-5">
                        <img class="img-fluid social-img" src="{{$image}}" alt="">
                    </div>
                @endforeach
            </div>
        </section>
        {{-- FINE QUARTA SECTION --}}
    </main>
    {{-- FINE MAIN --}}

</x-layout>