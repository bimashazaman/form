<link href="{{ asset('app.css') }}" rel="stylesheet">
<script src="{{ asset('app.js') }}" defer></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @include('flash')
                    <form method="POST" action="/api/users/s" >
                        @csrf

                        <div class="form-group row">
                            <label  class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6 shadow-xl border-bottom">
                                <input type="text" class="form-control " name="name" value="{{ old('name') }}" >

                            </div>
                        </div>

                     <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                              
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div