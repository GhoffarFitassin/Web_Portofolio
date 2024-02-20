@extends('layout.own')

@section('container')
    <div class="row layout-top-spacing m-auto" id="cancel-row" style="width: 50%; justify-content: center;">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Add Data Paket</h4>
                    </div>
                </div>
                <div class="form">
                    <form action="/owner/user" method="POST">
                        @csrf
                        <div class="form-row mb-4">
                            <div class="col-6">
                                <label for="fname"><strong>Full Name</strong></label>
                                <input type="text" class="form-control" id="fname" name="name"
                                placeholder="Full Name" required onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/g, '')" value="{{ old('name') }}">
                            </div>
                            <div class="col-6">
                                <label for="kode"><strong>Users Code</strong></label>
                                <input type="text" class="form-control" id="kode" name="kd_users"
                                    value="{{ 'KSR-' . $kd }}" required readonly>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-6">
                                <label for="uname"><strong>Username</strong></label>
                                <input type="text" class="form-control" id="uname" name="username"
                                placeholder="Username" minlength="6" maxlength="10" required onkeyup="this.value=this.value.replace(/[^a-z]/g, '')" value="{{ old('username') }}">
                            </div>
                            <div class="col-6">
                                <label for="password"><strong>Password</strong></label>
                                <input type="password" class="form-control" id="password" name="password" minlength="6" maxlength="10" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col-6">
                                <label for="outlet"><strong>Outlet Name</strong></label>
                                <select id="outlet" class="form-control basic" name="outlet_id" required>
                                    <option selected disabled value="">--- Select Outlet Name ---</option>
                                    @foreach ($data as $outlet)
                                    <option value="{{ $outlet->id }}">{{ $outlet->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="role"><strong>Role</strong></label>
                                <input type="text" class="form-control" id="role" name="role"
                                    value="Kasir" required readonly>
                            </div>
                        </div>
                        <div>
                            <a href="/owner/user" class="btn btn-primary">back</a>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

