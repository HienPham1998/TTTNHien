@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" style="margin-top:50px">
        <div class="col-sm-8" id="content" style="margin-left:150px">
            <form class="form-horizontal mt-5" method="POST" action="/register-store">
                @csrf
                <fieldset id="account">
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
                    <legend>Your infomation</legend>
                    <div class="form-group required">
                        <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-firstname" placeholder="First Name"
                                name="firstname" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-lastname" placeholder="Last Name"
                                name="lastname" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone"
                                name="phone" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">Shop name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shop-name" placeholder="Shop name"
                                name="shopname" required>
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-telephone" class="col-sm-2 control-label">Shop address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="input-shop-address" placeholder="Shop address"
                                name="shopaddress" required>
                        </div>
                    </div>
                </fieldset>
                <!-- <fieldset id="address">
          <legend>Your store infomation</legend>
          <div class="form-group">
            <label for="input-company" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-company" placeholder="Name of store" value="" name="company">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-address-1" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address-1" placeholder="Address" value="" name="address">
            </div>
          </div>
          <div class="form-group">
            <label for="input-address-2" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address-2" placeholder="Phone" value="" name="phone">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-city" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-city" placeholder="Email" value="" name="email">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-postcode" class="col-sm-2 control-label">Image</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-postcode" placeholder="Image" value="" name="image">
            </div>
          </div>
        </fieldset> -->
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy
                                Policy</b></a>
                        <input type="checkbox" value="1" name="agree">
                        &nbsp;
                        <button type="submit" class="btn btn-primary">Continue</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection
