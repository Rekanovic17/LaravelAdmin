@extends("leyout")
@section('naslov')
    Contact
@endsection
@section('Desc')
<form style="width: 26rem;" method="POST" action="/post-contact">
  {{ csrf_field() }}
    <!-- Name input -->
    @if ($errors->any())
      <p>GRESKA: {{$errors->first()}}</p>
    @endif

    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="email">Email:</label>
      <input name="email" type="email" id="email" placeholder="Enter email..." class="form-control" />
      
    </div>
  
    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="subject">Subject:</label>
      <input name="description" type="text" id="subject" placeholder="Enter subject..." class="form-control" />
     
    </div>
  
    <!-- Message input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="message">Message</label>
      <textarea name="message" class="form-control" id="message" placeholder="Enter message..." rows="4"></textarea>
    </div>
  
    <!-- Submit button -->
    <div class=" d-flex justify-content-center align-content-center">
        <button type="submit" class="btn btn-primary btn-block mb-4 w-25">Send</button>
    </div>
  </form>
@endsection