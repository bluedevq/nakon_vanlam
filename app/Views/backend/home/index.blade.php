@extends('layouts.backend.default')
@section('content')
    <div class="content">
        <div class="container">
            <div class="post">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title flex align-items-center">
                            <div class="mr-auto flex align-items-center">
                                <h1 class="heading-1">Danh sách các sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="scroll-area responsive-container-sp">
                            <table class="table align-middle">
                                <thead>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Email</th>
                                <th></th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cửa cuốn</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cửa nhôm xingfa</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Lan can cầu thang kính</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cabin phòng tắm kính</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Cửa nhôm hệ thủy lực</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kính ốp bếp</td>
                                    <td>samaple@abc.oc.jp</td>
                                    <td>
                                        <div class="flex align-items-center justify-content-end flex-shrink-0">
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="mailmagazine-list.html" class="btn btn-icon mr-3">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 flex align-items-center">
                            <nav class="flex align-items-center ml-auto page-controls">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link page-prev" href="#">Trang trước</a></li>
                                    <li class="page-item"><span class="current-page">1</span></li>
                                    <li class="page-item"><span>/</span></li>
                                    <li class="page-item"><span class="total-page">3</span></li>
                                    <li class="page-item"><a class="page-link page-next" href="#">Trang kế</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
