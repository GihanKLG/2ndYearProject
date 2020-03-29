@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                       <div class="control-group">
              <label class="control-label">System User Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Admin/Editor Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">E-mail :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder="E-mail" />
              </div>
            </div>
            
           <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Address" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Contact :</label>
              <div class="controls">
                <input type="text" class="span11" name="contact" placeholder="Address" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">State :</label>
              <div class="controls">
                <input type="text" class="span11" name="state" placeholder="State" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">City :</label>
              <div class="controls">
                <input type="text" class="span11" name="city" placeholder="City" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Job Type :</label>
              <div class="controls">
                <input type="text" class="span11" name="type" placeholder="Job_type" />
              </div>
            </div>

  
            <div class="control-group">
              <label class="control-label">Password input :</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="Enter Password"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Zip Code :</label>
              <div class="controls">
                <input type="text" class="span11" name="zipcode" placeholder="zip code" />
              </div>
            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
