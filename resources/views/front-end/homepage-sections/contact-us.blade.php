<div class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">Keep in touch?</h2>
                <form class="contact-form" action="{{ route('contact.store') }}">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="nc-icon nc-single-02"></i>
                                  </span>
                                </div>
                                @php $input = "name" @endphp
                                <input type="text" name="{{ $input }}" required class="form-control @error($input) is-invalid @enderror" placeholder="Name">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="nc-icon nc-email-85"></i>
                                  </span>
                                </div>
                                @php $input = "email" @endphp
                                <input type="email" name="{{ $input }}" required class="form-control @error($input) is-invalid @enderror" placeholder="Email">
                                @error($input)
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <label>Message</label>
                    @php $input = "message" @endphp
                    <textarea class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" required rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                    @error($input)
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>