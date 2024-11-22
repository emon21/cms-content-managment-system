@extends('layouts.admin-app')
@section('title', 'Color Setting Page')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mail Setting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Setting</li>
                            <li class="breadcrumb-item">Mail Setting</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-12">
                    <div class="card card-primary card-outline card-outline-tabs">
                        <div class="card-header p-0 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">


                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('setting.mail-setting') ? 'active' : '' }}" id="mailSetting-tab" data-toggle="pill" href="#mailSetting"
                                        role="tab" aria-controls="mailSetting" aria-selected="false">Mail Setting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="basicEmailSetting-tab" data-toggle="pill"
                                        href="#basicEmailSetting" role="tab" aria-controls="basicEmailSetting"
                                        aria-selected="true">Basic Email Setting</a>
                                </li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-four-tabContent">

{{-- {{ request()->routeIs('setting.mail-setting') ? 'active' : '' }} --}}
                                <div class="tab-pane fade  {{ request()->routeIs('setting.mail-setting') ? 'active show' : '' }}" id="mailSetting" role="tabpanel"
                                    aria-labelledby="mailSetting-tab">
                                    <div class="card">
                                        <div class="card-header">Mail Setting</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.mail.update',$mailSetting) }}" method="POST">
                                                @csrf
                                                <div class="d-flex gap-4">
                                                    <div class="form-group col-sm-4">
                                                        <label class="form-label" for="mail_driver">Mail Driver 
                                                            <sup class="text-danger input-req">(ex. smtp, sendmail, mail)</sup>
                                                         </label>
                                                        <input type="text" class="form-control" name="mail_driver"
                                                            placeholder="Mail Driver" id="mail_driver" value="{{ $mailSetting->mail_driver }}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_host">Mail Host</label>
                                                        <input type="text" class="form-control" name="mail_host"
                                                            placeholder="Mail Port" id="mail_host" value="{{ $mailSetting->mail_host }}"">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_port">Mail Port</label>
                                                        <input type="text" class="form-control" name="mail_port"
                                                            placeholder="Mail Port" id="mail_port" value="{{ $mailSetting->mail_port }}">
                                                    </div>
                                                    
                                                </div>
                                                <div class="d-flex">
                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_encryption">Mail Encryption</label>
                                                        <input type="text" class="form-control" name="mail_encryption"
                                                            placeholder="Mail Encryption" id="mail_encryption" value="{{ $mailSetting->mail_encryption }}">
                                                    </div>

                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_username">Mail Username</label>
                                                        <input type="text" class="form-control" name="mail_username"
                                                            placeholder="Mail Username" id="mail_username" value="{{ $mailSetting->mail_username }}">
                                                    </div>

                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_password">Mail Password</label>
                                                        <input type="text" class="form-control" name="mail_password"
                                                            placeholder="Mail Password" id="mail_password" value="{{ $mailSetting->mail_password }}">
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-outline-success">Update Mail
                                                    Setting</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade {{ request()->routeIs('setting.basic-mail') ? 'active show' : '' }}" id="basicEmailSetting" role="tabpanel"
                                    aria-labelledby="basicEmailSetting-tab">
                                    <div class="card">
                                        <div class="card-header">Basic Email Setting</div>
                                        <div class="card-body">
                                            <form action="{{ route('setting.basic-mail.update',$mailSetting) }}" method="POST">
                                                @csrf
                                                <div class="d-flex gap-4">
                                                    <div class="form-group col-sm-4">
                                                        <label class="form-label" for="mail_form_name">Form Name</label>
                                                        <input type="text" class="form-control" name="mail_form_name"
                                                            placeholder="Form Name" id="mail_form_name" value="{{ $mailSetting->mail_form_name }}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_form_address">Form Email Address</label>
                                                        <input type="text" class="form-control" name="mail_form_address"
                                                            placeholder="Form Email Address" id="mail_form_address" value="{{ $mailSetting->mail_form_address }}">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="mail_reply_email_address">Show Reply-To email</label>
                                                        <input type="text" class="form-control" name="mail_reply_email_address"
                                                            placeholder="Show Reply-To email" id="mail_reply_email_address" value="{{ $mailSetting->mail_reply_email_address }}">
                                                    </div>
                                                    
                                                </div>
                                                

                                                <button type="submit" class="btn btn-outline-success">Update Mail
                                                    Setting</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>

@endsection
