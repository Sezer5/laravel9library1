  <!-- resources/views/child.blade.php -->

  @extends('layouts.adminlayout')

  @section('title', 'Admin Panel')

  @section('content')

  <!-- Right side column. Contains the navbar and content of the page -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Blank page
              <small>it all starts here</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Examples</a></li>
              <li class="active">Blank page</li>
          </ol>
      </section>

      <!-- Main content -->
      <section class="content">

          <!-- Default box -->
          <div class="box">
              <div class="box-header with-border">
                  <h3 class="box-title">Main Menu</h3>
              </div>
              <div class="box-body">
                  <form action="{{route('admin.profiles.update')}}" method="post" role="form">
                      @csrf
                      <div class="box-body">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Email</label>
                              <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                          </div>
                          <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                          </div>
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox"> Check me out
                              </label>
                          </div>
                      </div><!-- /.box-body -->

                      <div class="box-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
              </div><!-- /.box-body -->
              <div class="box-footer">
                  Footer
              </div><!-- /.box-footer-->
          </div><!-- /.box -->

      </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

  @endsection
