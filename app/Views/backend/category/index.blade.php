@extends('layouts.backend.default')
@section('content')
    <div class="content">
        <div class="container">
            <div class="post">
                <div class="card">
                    <div class="card-header">
                        <div class="page-title flex align-items-center">
                            <div class="mr-auto flex align-items-center">
                                <h1 class="heading-1">Danh mục sản phẩm</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-4"><a href="{{ route('category.create') }}" class="btn btn-success"><i class="fas fa-plus"></i>&nbsp;Thêm danh mục</a></div>
                        <div class="scroll-area responsive-container-sp">
                            <table class="table align-middle">
                                <thead>
                                <th>Tên danh mục</th>
                                <th></th>
                                </thead>
                                <tbody>
                                @if (!blank($entities))
                                @foreach($entities as $entity)
                                    <tr>
                                        <td>{{ $entity->name }}</td>
                                        <td>
                                            <div class="flex align-items-center justify-content-end flex-shrink-0">
                                                <a href="{{ route('category.edit', $entity->id) }}" class="btn btn-icon mr-3">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="{{ route('category.destroy', $entity->id) }}" class="btn btn-icon mr-3">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" style="text-align: center">Không có danh mục nào</td>
                                    </tr>
                                @endif
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
