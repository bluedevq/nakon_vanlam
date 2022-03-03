{{ Form::open(['route' => isset($entity) && $entity->id ? ['category.update', $entity->id] : 'category.store', 'class' => '', 'method' => isset($entity) && $entity->id ? 'PUT' : 'post', 'enctype' => 'multipart/form-data']) }}
<div class="form-block">
    <div class="row col-12">
        <div class="form-group">
            <div class="form-field col-6">
                <label class="input-name">Tên danh mục</label>
                {!! Form::text('name', $entity->name, ['class' => 'form-control ' .  ($errors->has('name') ? 'border-error' : '')]) !!}
                @if($errors->has('name'))<p class="error">{{ $errors->first('name') }}</p>@endif
            </div>
        </div>
    </div>
    <div class="row mt-4 col-12">
        <button type="submit" name="submit" class="btn btn-success col-2">Lưu</button>
    </div>
</div>
{!! Form::close() !!}
