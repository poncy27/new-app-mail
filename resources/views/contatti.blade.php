<x-main_layout>
    <div class="container mt-5 border border-2">
        <div class="d-flex justify-content-center ">
         <h1>Contattaci</h1>
        </div>
        <div>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



            <form method="POST" action="{{route('send')}}">
                @csrf

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" value="{{ old('email')}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1"  class="form-label">Testo</label>
                  <textarea type="text" name="message"  class="form-control" id="exampleInputPassword1">{{ old('message')}}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
              </form>
        </div>
      
    </div>
    
</x-main_layout>