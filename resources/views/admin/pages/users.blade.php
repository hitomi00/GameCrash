@extends('admin.layouts.admin')

@section('body')

    <main class="main-content left-0.5 position-relative border-radius-lg px-3 ">
        <div class="card">
            <div class="p-4 bg-main">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <input type="email" class="form-control form-control-alternative"
                                       id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <input type="text" placeholder="Regular" class="form-control form-control-alternative"
                                       disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <input type="email" class="form-control form-control-alternative"
                                       id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <input type="text" placeholder="Regular" class="form-control form-control-alternative"
                                       disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="button" value="Пошук" class="btn btn-success w-100">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Technology
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Employed
                        </th>
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img
                                            src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg"
                                            class="avatar avatar-sm me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{$user->name}}</h6>
                                        <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">Manager</p>
                                <p class="text-xs text-secondary mb-0">Organization</p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm badge-success">Online</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                   data-toggle="tooltip"
                                   data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

