@extends('layouts.app')
@section('content')
<div class="container">
    <form enctype="multipart/form-data" method="POST" action="register.html" id="form-product" class="mt-3">
        <hr class="hr-text" data-content="Basic Information">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input-firstname" class=" control-label">*Product's name</label>
                <input type="text" class="form-control" id="input-firstname" placeholder="Product's name" value=""
                    name="firstname">
            </div>
            <div class="form-group col-md-6">
                <label for="category" class="control-label">*Category</label>
                <select class="form-control" name="category" id="category">
                    @foreach($categories as $cat)
                    <option value="{{$cat->name}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="input-lastname" class=" control-label">*Description</label>
            <textarea type="text" class="form-control" id="input-lastname" placeholder="Description" value=""
                name="lastname" rows="5"></textarea>
        </div>
        <hr class="hr-text" data-content="Product Information">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="input-company" class=" control-label">*Price</label>

                <input type="text" class="form-control" id="input-company" placeholder="Price" value="" name="company">
            </div>
            <div class="form-group col-md-4">
                <label for="input-address-1" class=" control-label">*Sale</label>

                <input type="text" class="form-control" id="input-address-1" placeholder="Sale" value="" name="phone">
            </div>
            <div class="form-group col-md-4">
                <label for="input-city" class=" control-label">Buy more discount</label>

                <input type="text" class="form-control" id="input-city" placeholder="Add price range" value=""
                    name="email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="input-postcode" class="control-label">*Image with URL</label>
                <input type="text" class="form-control" id="input-postcode" placeholder="Image" value="" name="image">
            </div>
            <div class="form-group col-md-6">
                <label for="input-postcode" class="control-label">*Image with Files</label>
                <!-- <input type="file" class="form-control-file" id="input-postcode" name="image"> -->
                <input type="file" class="custom-file-input" name="image">
            </div>
        </div>
        <div class="form-group">
          
        </div>
        <div class="form-group">
            <div class="mb-2" style="display: flex;align-items: center;">
                <input type="checkbox" value="true" name="agree">&nbsp;I have read and agree to the&nbsp;
                <a class="agree" href="#"><b>Privacy Policy</b></a>
            </div>
            <button type="submit" class="btn btn-primary">Continue</button>
        </div>
    </form>
</div>

@endsection
