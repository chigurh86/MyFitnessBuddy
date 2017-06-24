@extends ('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Meals</div>
                @if(!$meals->isEmpty())
                  <ul class="list-group">
                    @foreach ($meals as $meal)
                    <li class="list-group-item">
                      {{ $meal->name }}
                      <span style="float:right;">{{ $meal->created_at }}</span>
                    </li>
                    @endforeach
                  </ul>
                @else
                <h5>You have no meals <a href="/meals/create">Create Meal Now!</a></h5>
                @endif
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
