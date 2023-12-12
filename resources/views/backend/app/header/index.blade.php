
    <x-backend_main>   <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->


            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="row m-3">
                    <a href="{{ route('backend_header_create') }}">
                        <button type="button" class="btn btn-primary m-2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </a>
                </div>

                <!-- Page Heading -->
                <!-- Page Heading -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> Example</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Heading</th>
                                    <th>display</th>

                                    <th>Funksiyalar</th>
                                    <th>...</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Heading</th>
                                    <th>display</th>

                                    <th>Funksiyalar</th>
                                    <th>...</th>

                                </tr>
                                </tfoot>
                                <tbody>
@foreach($header as $head)
                                    <tr>
                                        <td>
                                            {{ $loop->index +1 }}
                                        </td>
                                        <td>{{ $head->heading }}</td>

                                        <td>
                                            @if($head->display == 1)
                                                <button type="button" class="btn btn-primary">Active</button>
                                            @elseif($head->display == 0)
                                                <button type="button" class="btn btn-danger">NoActive</button>
                                            @endif
                                        </td>

                                        <td class="d-flex">
                                            <a href="{{ route('header.edit' , ['header' => $head->id]) }}">
                                            <button type="button" class="btn btn-success  m-2"><i class="fas fa-pen"></i></button>

                                            </a>
                                            <a href="{{ route('header.show' , ['header' => $head->id]) }}">
                                                <button type="submit" class="btn btn-primary  m-2"><i class="fas fa-eye"></i></button>
                                            </a>

                                            <form action="{{route('header.destroy' , ['header' => $head->id])}}" method="POST" onsubmit="return confirm('Navbarni O\'chirishga Aminmisiz');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger  m-2"><i class="fas fa-trash"></i></button>
                                            </form>

                                        </td>
                                        <td>
                                            ...
                                        </td>

                                    </tr>
@endforeach
                                      </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </x-backend_main>


