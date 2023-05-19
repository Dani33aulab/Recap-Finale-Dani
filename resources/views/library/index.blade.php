<x-layout headerTitle="Tutte le librerie inserite">

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($libraries as $library)



                <div class="col-12 col-md-3">
                    <div class="card"">
                        <img src="{{storage::url($library->image)}}" class="card-img-top" alt="Foto di {{$library->name}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$library->name}}</h5>
                          <p class="card-text text-muted">{{$library->address}}</p>
                          <a href="#" class="btn btn-dark">Scopri di più</a>
                        </div>
                      </div>

                </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Non sono state ancora inserite libreria. Inserisci la tua!</p>
                        <a href="" class="btn btn-dark">Inserisci una libreria</a>
                    </div>
                @endforelse

        </div>

    </div>



</x-layout>