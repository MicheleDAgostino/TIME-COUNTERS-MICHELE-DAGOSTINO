<x-layout>
    {{-- INIZIO HEADER CON FORM DI LOGIN --}}
    <header class="container-fluid bg-header vh-100">
        <div class="row flex-column align-items-center justify-content-center vh-100">
            <div class="col-12 text-white text-center">
                <h3 class="display-3 text-uppercase text-center">Login</h3>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="mb-3">
                          <input name="email" type="email" placeholder="your@email.com" class="@error('email') is-invalid @enderror" value="{{old('email')}}">
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" placeholder="Enter Password" class="@error('password') is-invalid @enderror">
                              @error('password')
                                  <div class="alert alert-danger">{{$message}}</div>
                              @enderror
                          </div>
                        <button type="submit" class="btn btn-warning mt-4 btn-custom">LOGIN</button>
                      </form>
            </div>
        </div>
    </header>
    {{-- FINE HEADER --}}

</x-layout>