@extends('layouts.master')

@section('content')

<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Update Card</h3>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-sm-12">
        
            <div class="card">
                <div class="card-body">

                    <form action="{{ url ('card_edit_update/'. $update_single_card_data->id ) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h5 class="form-title"><span>Card Update</span></h5>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Card ID</label>
                                    <input type="text" class="form-control" value="{{ $update_single_card_data->card_id }}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Card Type</label>
                                    <select class="form-control" value="{{ $update_single_card_data->card_type }}">
                                        <option>Selct type</option>
                                        <option>Apple</option>
                                        <option>Malta</option>
                                        <option>Komola</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="{{ $update_single_card_data->country }}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">  
                                <div class="form-group">
                                    <label>Ex-Date</label>
                                    <input type="date" class="form-control" value="{{ $update_single_card_data->ex_date }}">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <label>Bank</label>
                                    <input type="text" class="form-control" value="{{ $update_single_card_data->bank_name }}">
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>							
        </div>					
    </div>					
</div>

@endsection