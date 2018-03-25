<!--genModal to display user detaisl in a Modal -->
@if($member)
<div class="modal fade" id="show-form-{{ $member->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Member Details</h4>
          </div>
          <div class="modal-body">

            <ul class="list-group">
              <li class="list-group-item">Member Name: {{$member->name}}</li>
              <li class="list-group-item">Member ID: {{$member->id}}</li>
              <li class="list-group-item">Email: {{$member->email}}</li>
              <li class="list-group-item">Contact Number: {{$member->contact}}</li>
              <li class="list-group-item">Interested: {{$member->interested}}</li>
              <li class="list-group-item">State: {{$member->country->country_name}}</li>
              <li class="list-group-item">City: {{$member->state->state_name}}</li>
            </ul>

          </div>
          @if(!Auth::guest())
            @if(Auth::user()->id == $member->user_id)
              <div class="modal-footer">
                <a href="/update/{{$member->id}}" class="btn btn-default pull-left">Edit</a>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                {!! Form::open(array('url' => '/destroy/'.$member->id, 'method' => 'PUT', 'class'=>'pull-right')) !!}
                  {{Form::hidden('_method', 'PUT')}}
                  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
              </div>
            @endif
          @endif
        </div>
      </div>
</div>
@endif
