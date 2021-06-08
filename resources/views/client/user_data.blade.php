@extends('layouts.client')
@section('content')

<main role="main" class="container pt-2">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-header back-gradient-green text-white">
                    <h6 class="text-to-uppercase">Moj limundo</h6>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-link">Lorem ipsum.</a>
                    <a href="#" class="btn btn-link">Lorem ipsum.</a>
                </div>
            </div>
        </div>

        <div class="col-9">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if($errors->has('currentPassword'))
                <div class="alert alert-danger">{{ $errors->first('currentPassword') }}</div>
            @endif

            @if($errors->has('newPassword'))
                <div class="alert alert-danger">{{ $errors->first('newPassword') }}</div>
            @endif

            @if($errors->has('newPasswordAgain'))
                <div class="alert alert-danger">{{ $errors->first('newPasswordAgain') }}</div>
            @endif
            <div class="card">
                <div class="card-header back-gradient-grey text-white">
                    <h6 class="text-to-uppercase">Moji podaci</h6>
                </div>
                <div class="card-body">
                    <div class="row pt-1">
                        <div class="col-3">
                            <h6>Korsnički broj</h6>
                        </div>
                        <div class="col-9">
                            <h6>123</h6>
                        </div>
                    </div>

                    <div class="row pt-1">
                        <div class="col-3">
                            <h6>Limundovac</h6>
                        </div>
                        <div class="col-9">
                            <h6>{{auth()->user()->username}}</h6>
                        </div>
                    </div>
                    <div class="row pt-1">
                        <div class="col-3">
                            <h6>Status naloga</h6>
                        </div>
                        <div class="col-9">
                            <h6>Aktivan (0)</h6>
                        </div>

                    </div>
                    <hr>
                    <form action="{{route('updateProfile', $userData->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="firstname">Ime</label>
                                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" value="{{$userData->profile->firstname}}">
                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="lastname">Prezime</label>
                                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="lastname" name="lastname" value="{{$userData->profile->lastname}}">
                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-12">
                                <h6>Broj tekućeg računa</h6>
                            </div>
                            <div class="col-12">
                                <p>Nije unet</p>
                            </div>

                        </div>
                        <div class="row pt-1">
                            <div class="col-12">
                                <a href="#">Zapamćene kartice</a>
                            </div>
                        </div>
                        <hr>

                        <div class="row pt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="country">Država</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="{{$userData->profile->country}}">{{$userData->profile->country}}</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="township">Opština</label>
                                    <select class="form-control" name="township">
                                        <option value="{{$userData->profile->township}}">{{$userData->profile->township}}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="township">Mesto</label>
                                    <select class="form-control" name="country">
                                        <option>novi sad</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="street_and_number">Ulica i broj</label>
                                    <input type="text" class="form-control @error('street_and_number') is-invalid @enderror" id="street_and_number" name="street_and_number" value="{{$userData->profile->street . " " . $userData->profile->street_number}}">
                                    @error('street_and_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="pak">PAK</label>
                                    <input type="text" class="form-control" id="pak" name="pak">
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="mobile_number">Mobilni telefon</label>
                                    <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" id="mobile_number" name="mobile_number" value="{{$userData->profile->mobile_number}}">
                                    @error('mobile_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row pt-1">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="email">e-mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{$userData->email}}">
                                </div>
                            </div>

                            <div class="col-12">
                                <a href="#" data-toggle="modal" data-target="#exampleModal">Promena lozinke</a>
                            </div>
                        </div>

                        <hr>
                        <button class="btn btn-lg" >Zapamti</button>
                    </form>

                </div>
            </div>
        </>
    </div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Promena lozinke</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('updatePassword')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="currentPassword">Trenutna lozinka</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">Lozinka</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPasswordAgain">Lozinka opet</label>
                        <input type="password" class="form-control" id="newPasswordAgain" name="newPasswordAgain">
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Odustani</button>
                    <button type="submit" class="btn btn-primary">Zapamti</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
