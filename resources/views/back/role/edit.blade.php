@extends('back.layout.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Update Role</h5>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Update Role</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('role.update', $role) }}" method="POST">
                        @method('patch')
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="mb-3">
                                    <label class="form-label" for="name">Role Name</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ $role->name }}">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                  <form action="{{route('role.sync.permission', $role)}}" method="POST">
                     @csrf
                     <table class="table">
                        <thead>
                           <tr>
                              <td>#</td>
                              <td>Permission Name</td>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                               $sr_no = 1;
                           @endphp
                           @foreach ($permissions as $item)
                               <tr>
                                 <td>{{$sr_no++}}</td>
                                 <td>{{$item->name}}</td>
                                 <td>
                                    <input type="checkbox" name="name"  value="{{$item->name}}" {{ in_array($item->name, $role->permissions->pluck('name')->toArray()) ? 'checked': '' }}>
                                 </td>
                               </tr>
                           @endforeach
                        </tbody>
                     </table>
                     <button type="submit" class="btn btn-primary mt-2">Sync Permission</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection
