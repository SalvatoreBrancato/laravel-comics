@extends( 'layout.app' )

 @section('fumetti')
<main>
    <div class="background"></div>
    <div class="container-background">
         <div class="container-card">
            <div class="current-series">CURRENT SERIES</div>
            
            @foreach( $comics as $elem )
                <div class="card" style="width: 18rem;">
                    <img src="{{ $elem['thumb'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$elem['title']}}</h5>
                    </div>
                </div>
            @endforeach  
            
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
</main>
@endsection