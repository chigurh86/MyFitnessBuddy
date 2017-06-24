@extends ('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
<div class="meal-name">
    <h2 class=>{{$meal->name}}&nbsp;</h2>
    <span class="meal-time">
      {{$meal->created_at->format('l, F js, Y')}}
    </span>
    <br>
    <span class="meal-data label label-pill label-primary">
      {{$meal->Calories()}} kCal
    </span>
    <span class="meal-data label label-pill label-default">
      {{$meal->Calories()}} Protein
    </span>
    <span class="meal-data label label-pill label-default">
      {{$meal->Calories()}} Carbohydrates
    </span>
    <span class="meal-data label label-pill label-default">
      {{$meal->Calories()}} Fat
    </span>
    <h4>Foods</h4>
  @if(!$meal->foods->isEmpty())
  <ul class="list-group"> -->
    @foreach($meal->foods as $food)
    <li class="list-group-item">
      {{ $food->name }}
      <span class="food-pcf pull-right">
        {{ $food->protein }}:{{ $food->carbohydrates }}:{{ $food->fat }}
      </span>
    </li>
    @endforeach
</ul>
  @else
  <div class="panel-body">
        <form class="" action="/meals/{{$meal->id}}/foods" method="post">
          <fieldset class="form-group">
            <label for="">Food Name</label>
            <input name="name" class="form-control" action="" type="text" name="" value="">
            <label for="">Protein</label>
            <input name="protein" class="form-control" type="text" name="" value="">
            <label for="">Carbohydrates</label>
            <input name="carbohydrates" class="form-control" type="text" name="" value="">
            <label for="">Fat</label>
            <input name="fat" class="form-control" type="text" name="" value="">
            {{ csrf_field() }}
            <button type="submit" name="button">Submit</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
  @endif
@stop
