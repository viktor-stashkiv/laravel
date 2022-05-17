@if($errors->any()) <!-- вивід помилок -->
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        @if(session('success')) <!-- вивід повідомлення з сесії -->
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif