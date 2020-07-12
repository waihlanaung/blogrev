<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control"id="title" value="{{old('title')?? $post->title?? "" }}">
<div class="error"> {{$errors->first('title')}}</div>
</div>
<div class="form-group">
<label for="content">Content</label>
<input type="text" name="content" class="form-control" id="content" value="{{old('content')?? $post->content?? ""}}">
<div class="error" >{{$errors->first('content')}}</div>
</div>
<div class="form-group">
<label for="customer_id">customer_id</label>
<select name="customer_id" id="customer_id" class="custom-select mb-3">
    @foreach($customers as $customer)
        <option value="{{$customer->id}}" {{ (($post->customer_id??"") == $customer->id)? "selected":"" }}>{{$customer->name}}</option>
    @endforeach
</select>
<div class="error" >{{$errors->first('customer_id')}}</div>
</div>
<div class="custom-file mb-3">
<label  class="custom-file-label" for="image">Image</label>
<input type="file" name="image" id="image"  class="custom-file-input">
<div class="error">{{$errors->first('image')}}</div>
</div>


