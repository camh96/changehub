@extends('layouts.master')
@section('content')
<div class="container">
   <div class="padding"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
         </div>
         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <h3 class="panel-title">{{ $person->fname ." ". $person->lname }}</h3>
               </div>
               <div class="panel-body">
                  <div class="row">
                     <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{ $profilePic }}" class="img-circle img-responsive"> Profile image from <a href="https://en.gravatar.com/">Gravatar.</a> </div>
                     <div class=" col-md-9 col-lg-9 ">
                        <table class="table table-user-information">
                           <tbody>
                              <tr>
                                 <td>User ID</td>
                                 <td>{{ $person->id }}</td>
                              </tr>
                              <tr>
                                 <td>Requested Trips</td>
                                 <td> @if(count($amount) == 0)
                                    None Yet! 
                                    @else <a href="/mytrips/{!! $person->id !!}"> {{count($amount)}}</a>   @endif
                                 </td>
                              </tr>
                              <tr>
                                 <td>Email</td>
                                 <td><a href="mailto:{{ $person->email }}">{{ $person->email }}</a></td>
                              </tr>
                              <td>Phone Number</td>
                              <td>
                                 <a href="tel: {{ $person->phone }}">
                                    {{ $person->phone }}
                              </td>
                              </tr>
                              <tr>
                              <td>Metro Number</td>
                              <td> @if(empty($person->metronumber)) None Set! @else {{$person->metronumber}} @endif</td>
                              </tr>
                              <tr>
                              <td>FlyBuys Number</td>
                              <td>@if($person->flybuys === "6014-0000-0000-0000") None Set! @else {{$person->flybuys}}  @endif</td>
                              </tr>
                              <tr>
                              <td>Incentives Wanted</td>
                              <td>{{$person->tools}}</td>
                              </tr>
                              <tr>
                              <td>Access Level</td>
                              <?php if ($person->access === "admin"): ?>
                              <td><span class="label label-danger">{{ $person->access }}</span></td>
                              <?php else: ?>
                              <td><span class="label label-success">{{ $person->access }}</span></td>
                              <?php endif ?>
                              </tr>
                           </tbody>
                        </table>
                        <a href="{{route('profile.edit',$person->id)}}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-pencil"></span> Edit User</a>
                        <!-- <a href="{{route('profile.destroy',$person->id)}}" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-exclamation-sign"></span>  Delete User</a> -->
                        <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-exclamation-sign"></span> Delete User</button>
                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                           <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Are you sure you wish to delete {{$person->fname}} {{$person->lname}}?</h4>
                                 </div>
                                 <div class="modal-body">
                                    <p>This will delete the user and all associated trips.</p>
                                    <p>This action is irreversible, are you entirely certain you wish to do this?</p>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                                    <a href="{{route('profile.destroy',$person->id)}}" class="btn btn-danger"> Delete User</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection