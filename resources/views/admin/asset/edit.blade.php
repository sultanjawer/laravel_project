@extends ('layouts.asset')
@section ('style')
@endsection
@section('content')

<div class="" data-title="System Alert" data-intro="Ini adalah Panel yang berisi informasi atau pemberitahuan penting untuk Anda." data-step="1">@include('partials.sysalert')</div>
<div class="row">
    <div class="col-md-12">
        <div id="panel-1" class="panel" data-title="Panel Data" data-intro="Panel ini berisi data-data" data-step="2">
            <div class="panel-hdr">
                <h2>
                    Asset <span class="fw-300 ml-2"><i>{{$assets->item}}</i></span>
                </h2>
                <div class="panel-toolbar">
                    <a class="btn btn-xs btn-primary mr-1 ml-1" href="/asset"><i class="fal fa-save mr-1"></i>Back</a>
                    @include('partials.globaltoolbar')
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
                    <form method="post" action="/asset/update/{{$assets->id}}">
                        @csrf
                        {{method_field ('PUT')}}
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="form-label" for="inventNum">Invent #</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="inventnum" id="inventNum" class="form-control" placeholder="Inventory Number" aria-label="Inventory Number" aria-describedby="inventNum" value="{{$assets->inventnum}}">
                                    </div>
                                    @if ($errors->has('item'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('item')}}
                                    </div>

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="assetName">Asset Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="item" id="assetName" class="form-control" placeholder="Name of the Asset" aria-label="Asset Name" aria-describedby="assetName" value="{{$assets->item}}">
                                    </div>
                                    @if ($errors->has('item'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('item')}}
                                    </div>

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemCategory">Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <select type="text" name="category" id="itemCategory" class="form-control" placeholder="Category" aria-label="Item Category" aria-describedby="itemCategory">
                                            <option value="Gedung" {{$assets->category=="Gedung"?"selected":''}}>Gedung</option>
                                            <option value="Furnitur" {{$assets->category=="Furnitur"?"selected":''}}>Furnitur</option>
                                            <option value="Tanah" {{$assets->category=="Tanah"?"selected":''}}>Tanah</option>
                                            <option value="Kendaraan" {{$assets->category=="Kendaraan"?"selected":''}}>Kendaraan</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('category'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('category')}}
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemCondition">Condition</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <select type="text" name="condition" id="itemCondition" class="form-control" placeholder="Condition" aria-label="Asset Condition" aria-describedby="itemCondition">
                                            <option value="Baru" {{$assets->condition=="Baru"?"selected":''}}>Baru</option>
                                            <option>Tanah</option>
                                            <option value="Baik" {{$assets->condition=="Baik"?"selected":''}}>Baik</option>
                                            <option value="Rusak" {{$assets->condition=="Rusak"?"selected":''}}>Rusak</option>
                                        </select>
                                    </div>
                                    @if ($errors->has('condition'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('condition')}}
                                    </div>

                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="assetLocation">Asset Location</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <input type="text" name="location" id="assetLocation" class="form-control" placeholder="Current location of the Asset" aria-label="Asset Location" aria-describedby="assetLocation" value="{{$assets->location}}">
                                    </div>
                                    @if ($errors->has('location'))
                                    <div class="help-block text-danger">
                                        {{$errors->first('location')}}
                                    </div>

                                    @endif
                                </div>
                            </div>
                            <div class="col-md-5 border-left">
                                <div class="mb-3 col-12">
                                    <img src="/img/card-backgrounds/cover-1-lg.png" width="100%" height="100%" class="mb-2">
                                    <a class="btn btn-block btn-sm btn-primary mr-1 ml-1" href="javascript:void(0)"><i class="fal fa-save mr-1"></i>Save/Change Picture</a>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="itemName">Prepend</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Abc</span>
                                        </div>
                                        <textarea type="text" id="itemName" class="form-control" placeholder="Name of the item" aria-label="Username" aria-describedby="itemName" rows="3"></textarea>
                                    </div>
                                    <span class="help-block">Some help content goes here</span>
                                </div>
                            </div>
                            <div class="col text-right">
                                <div class="form-group mt-3">
                                    <button type="submit" class="fw-500 btn btn-sm btn-success mr-1"><i class="fal fa-save fa-fw"></i>Save</button>

                                    <a href="/asset" class="fw-500 btn btn-sm btn-warning mr-1"><i class="fal fa-times fa-fw"></i>Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- @parent -->
<!-- start script for this page -->

@section('scripts')

@endsection