@extends('layouts.backend.default')
@section('content')
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
                @include('layouts.backend.elements.pagination')
            </div>
        </div>
    </div>
@stop
