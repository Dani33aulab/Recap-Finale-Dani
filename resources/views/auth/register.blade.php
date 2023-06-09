<x-layout headerTitle="Registrati">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                {{-- form --}}
                <form>
                    <div class="p-5 border" action="{{route('register')}}" method="POST">

                              @if ($errors->any())
                             <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                                 @endforeach
                        </ul>
                        </div>
                        @endif


                        @csrf

                        <div class="mb-3">  
                            <label for="email" class="form-label">Indirizzo email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                    </div>
                        
                    <div class="mb-3">
                      
                      <label for="name" class="form-label">Nome Utente</label>
                      <input type="text" name="name" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                       
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="email">
                    </div>


                    <div class="mb-3">
                       
                        <label for="password_confirmation" class="form-label"> Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                      </div>




                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-lg-dark">Registrati</button> <br>
                    <a href="{{route('login')}}" class="small fst-italic">Sei già registrato</a>
                  </form>
            </div>
        </div>
    </div>

</x-layout>