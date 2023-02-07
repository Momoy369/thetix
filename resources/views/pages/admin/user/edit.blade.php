@extends('layouts.admin')

@section('title')
    TheTix Edit User - Admin
@endsection

@section('content')

<!-- Section Content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">
            User
          </h2>
          <p class="dashboard-subtitle">
            Edit User
          </p>
        </div>
        <div class="dashboard-content">
          <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">User Name</label>
                                        <input type="text" name="name" class="form-control" required value="{{ $item->name }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">User Email</label>
                                        <input type="email" name="email" class="form-control" required value="{{ $item->email }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">User Password</label>
                                        <input type="password" name="password" class="form-control">
                                        <small>Leave empty if you do not want to change password</small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Roles</label>
                                        <select name="roles" id="" required class="form-control">
                                            <option value="{{ $item->roles }}" selected>No changes</option>
                                            <option value="ADMIN">ADMIN</option>
                                            <option value="USER">USER</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5">
                                        Update Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection