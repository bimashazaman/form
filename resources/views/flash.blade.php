
@if(session()->has('message'))

<div class="py-4 px-2 bg-green-400"> {{session()->get('message')}} </div>
@elseif(session()->has('error'))
<div class="py-4 px-2 bg-red-400"> {{session()->get('error')}} </div>
@endif

@if(!empty($errors))
    @if($errors->any())
        <ul class="alert alert-danger" style="list-style-type: none">
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
@endif