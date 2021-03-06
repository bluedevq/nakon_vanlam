{{ Form::open(['route' => isset($entity) && $entity->id ? ['product.update', $entity->id] : 'product.store', 'class' => '', 'method' => isset($entity) && $entity->id ? 'PUT' : 'post', 'enctype' => 'multipart/form-data']) }}
<div class="form-block">
    <div class="row">
        <div class="form-group">
            <div class="form-field col-6">
                <label class="input-name">Tên sản phẩm</label>
                {!! Form::text('name', $entity->name, ['class' => 'form-control ' .  ($errors->has('name') ? 'border-error' : '')]) !!}
                @if($errors->has('name'))<p class="error">{{ $errors->first('name') }}</p>@endif
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="form-group">
            <div class="form-field col-4">
                <label class="input-name">Danh mục</label>
                {!! Form::select('category_id', $categories, $entity->category_id, ['class' => 'form-control form-select ' .  ($errors->has('category_id') ? 'border-error' : '')]) !!}
                @if($errors->has('category_id'))<p class="error">{{ $errors->first('category_id') }}</p>@endif
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="form-group">
            <div class="form-field col-4">
                <label class="input-name">Giá sản phẩm</label>
                {!! Form::text('price', $entity->price, ['class' => 'form-control ' .  ($errors->has('price') ? 'border-error' : '')]) !!}
                @if($errors->has('price'))<p class="error">{{ $errors->first('price') }}</p>@endif
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="form-group">
            <div class="form-field col-4">
                <label class="input-name">Ảnh sản phẩm</label>
                {!! Form::file('image_url', ['class' => 'form-control ' .  ($errors->has('image_url') ? 'border-error' : '')]) !!}
                @if($errors->has('image_url'))<p class="error">{{ $errors->first('image_url') }}</p>@endif
            </div>
            @if($entity->image_url)
                <div class="form-field col-4">
                    <img src="{{ public_url($entity->image_url) }}" alt="">
                </div>
            @endif
        </div>
    </div>
    <div class="row mt-4">
        <div class="form-group">
            <div class="form-field col-8">
                <label class="input-name">Mô tả sản phẩm</label>
                {!! Form::textarea('description', $entity->description, ['class' => 'form-control ' .  ($errors->has('description') ? 'border-error' : '')]) !!}
                @if($errors->has('description'))<p class="error">{{ $errors->first('description') }}</p>@endif
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <input type="submit" value="Lưu" class="btn btn-success col-2"/>
    </div>
</div>
{!! Form::close() !!}
