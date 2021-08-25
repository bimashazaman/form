<link href="{{ asset('app.css') }}" rel="stylesheet">
<script src="{{ asset('app.js') }}" defer></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
              

                {{-- <div class="card-body">
                    <div>
                        @if ($errors->any())
                          <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                          </div><br />
                        @endif --}}
                    <form method="POST" action="{{ route('user.register') }}" >
                        @csrf
                       
                    
                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 shadow-xl border-bottom">
                                <input type="text" class="form-control " name="name" value="{{ old('name') }}" >
                                @if(!empty($errors))
                                @if($errors->any())
                                    <ul class="alert alert-danger" style="list-style-type: none">
                                        @foreach($errors->all() as $error)
                                            <li>{!! $error !!}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endif
                            </div>
                        </div>


                        <div class="form-group row">
                         <label for="Profile_created_by"  class="col-md-4 col-form-label text-md-right">{{ __('Profile created by') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input type="text" class="form-control " name="Profile_created_by" value="{{ old('Profile_created_by') }}" >

                         </div>
                     </div>

                     <div class="form-group row">
                        <label for="email"  class="col-md-4 col-form-label text-md-right">{{ __('email') }}</label>

                        <div class="col-md-6 shadow-xl border-bottom">
                            <input type="text" class="form-control " name="email" value="{{ old('email') }}" >

                        </div>
                    </div>
                     
                     <div class="form-group row">
                         <label class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Gender" type="text" class="form-control " name="Gender" value="{{ old('Gender') }}" required autocomplete="Gender" autofocus>

                         </div>
                     </div>

                     

                     <div class="form-group row">
                         <label for="Marital_Status" class="col-md-4 col-form-label text-md-right">{{ __('Marital Status') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Marital_Status" type="text" class="form-control " name="Marital_Status" value="{{ old('Marital_Status') }}" required autocomplete="Marital_Status" autofocus>

                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="Religion" class="col-md-4 col-form-label text-md-right">{{ __('Religion') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Religion" type="text" class="form-control " name="Religion" value="{{ old('Religion') }}" required autocomplete="Religion" autofocus>

                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="Sect" class="col-md-4 col-form-label text-md-right">{{ __('Sect') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Sect" type="text" class="form-control " name="Sect" value="{{ old('Sect') }}" required autocomplete="Sect" autofocus>

                         </div>
                     </div>

        

                     <div class="form-group row">
                         <label for="Country_living_in" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Country_living_in" type="text" class="form-control " name="Country_living_in" value="{{ old('Country_living_in') }}" required autocomplete="Country_living_in" autofocus>

                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="Country_Code" class="col-md-4 col-form-label text-md-right">{{ __('Country Code') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Country_Code" type="text" class="form-control " name="Country_Code" value="{{ old('Country_Code') }}" required autocomplete="Country_Code" autofocus>

                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="Mobile_No" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                         <div class="col-md-6 shadow-xl border-bottom">
                             <input id="Mobile_No" type="text" class="form-control " name="Mobile_No" value="{{ old('Mobile_No') }}" required autocomplete="Mobile_No" autofocus>

                         </div>
                     </div>



                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                              
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary name="submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="col-sm-12">

                        @if(session()->get('success'))
                          <div class="alert alert-success">
                            {{ session()->get('success') }}  
                          </div>
                        @endif
                      </div>
                </div>
            </div>
        </div>
    </div>
</div