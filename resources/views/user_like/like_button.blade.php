@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_liking($user->id))
        {!! Form::open(['route' => ['user.unlike', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入りから外す', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.like', $user->id]]) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif