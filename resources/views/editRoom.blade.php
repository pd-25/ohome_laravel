@extends('userMainlayout')
@section('title','Home page')
    
@section('content')

<main id="main">
  <div class="content">
     <div class="row vertical-center-row">
        <div class="col-xs-4 col-xs-offset-4">
           <div class="card">
              <div class="card-header">
                 <h5 class="title">Edit Your Room Details</h5>
              </div>
              <div class="card-body">
                 <form method="POST" action="{{route('edit_room',$edit_room->id)}}">
                    @csrf
                    <div class="row">
                       <div class="col-md-12 pr-md-1">
                          <div class="form-group">
                             <label>Description</label>
                             <input type="text" class="form-control" name="property_description" placeholder="Write something about your room" value="{{$edit_room->property_description}}" >
                          </div>
                       </div>
                       <div class="col-md-12 pr-md-1">
                          <div class="form-group">
                             <label>Address</label>
                             <input type="text" class="form-control" name="address" placeholder="Room address " value="{{$edit_room->address}}" >
                          </div>
                       </div>
                       <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                             <label>Bed</label>
                             <input type="text" class="form-control" name="bed" placeholder="bed no." value="{{$edit_room->bed}}" >
                          </div>
                       </div>
                       <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                             <label>bathroom</label>
                             <input type="text" class="form-control" name="bathroom" placeholder="bathroom no." value="{{$edit_room->bathroom}}">
                          </div>
                       </div>
                       <div class="col-md-4 pr-md-1">
                          <div class="form-group">
                             <label>Price</label>
                             <input type="text" class="form-control" name="rent_price" placeholder="Rent" value="{{$edit_room->rent_price}}" >
                          </div>
                       </div>
                       <div class="col-md-6 ml-5">
                          <div class="form-group">
                             <label>availability</label>
                             <select name="availability" id="" class="form-control">
                             <option value="1" @if($edit_room->availability == 1) selected @endif>Active</option>
                             <option value="0" @if($edit_room->availability == 0) selected @endif>Inactive</option>
                             </select>
                          </div>
                       </div>
                    </div>
                    <div class="card-footer">
                       <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                 </form>
              </div>
           </div>
        </div>
     </div>
  </div>
</main><!-- End #main -->


@endsection