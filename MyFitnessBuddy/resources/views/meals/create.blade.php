@extends ('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Another Meal</div>

                <div class="panel-body">

                    <form class="" action="/users/{{$user->id}}/meals" method="post">
                      <fieldset class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="">
                      {{ csrf_field() }}
                      </fieldset>
                      <button class="btn-primary" type="submit" value="submit" name="button">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
