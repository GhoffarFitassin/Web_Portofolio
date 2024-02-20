@extends('layout.adm')

@section('container')
    <div class="row layout-top-spacing m-auto" id="cancel-row" style="width: 60%;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Update Data Paket</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/admin/paket/{{ $paket->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-6">
                                <label for="name"><strong>Package Name</strong></label>
                                <input type="text" class="form-control" id="name" name="nama_paket"
                                    value="{{ $paket->nama_paket }}" placeholder="Cucian Anam" required
                                    onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/g, '')">
                            </div>
                            <div class="col-6">
                                <label for="price"><strong>Price</strong></label>
                                <input type="text" class="form-control mb-4" name="harga"
                                    value="{{ $paket->harga }}" required>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-6">
                                <label for="outlet"><strong>Outlet Name</strong></label>
                                <select id="outlet" class="form-control basic" name="outlet_id" required>
                                    <option selected value="{{ $paket->outlet_id }}">{{ $paket->outlet->name }}</option>
                                    @foreach ($item as $outlet)
                                        <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="type"><strong>Type</strong></label>
                                <select id="type" class="form-control basic" name="jenis" required>
                                    <option selected>{{ $paket->jenis }}</option>
                                    <option value="Kiloan">Kiloan</option>
                                    <option value="Selimut">Selimut</option>
                                    <option value="Bed Cover">Bed Cover</option>
                                    <option value="Kaos">Kaos</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <a href="/admin/paket" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
