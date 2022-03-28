<?php

namespace App\Http\Controllers\Module\Backend;

use App\Model\Entities\Category;
use App\Model\Entities\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\MessageBag;

/**
 * Class ProductController
 * @package App\Http\Controllers\Module\Backend
 */
class ProductController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
        $this->registModel(Product::class, Category::class);
    }

    public function index()
    {
        $this->setViewData([
            'entities' => $this->fetchModel(Product::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->with('category')->get()
        ]);
        return $this->render();
    }

    public function store()
    {
        DB::beginTransaction();
        try {
            $entity = new Product();
            $id = $entity->getNextInsertId();
            $entity->id = $id;
            $this->_beforeCommit($entity);
            DB::commit();
            return $this->_to('product.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception);
        }
        return $this->_to('product.create')->withInput($this->getParams())->withErrors(new MessageBag(['Lỗi không lưu được']));
    }

    public function update($id)
    {
        DB::beginTransaction();
        try {
            $entity = $this->fetchModel(Product::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->where('id', $id)->first();
            $this->_beforeCommit($entity);
            DB::commit();
            return $this->_to('product.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception);
        }
        return $this->_to('product.edit', ['id' => $id])->withInput($this->getParams())->withErrors(new MessageBag(['Lỗi không lưu được']));
    }

    protected function _prepareForm($id = null)
    {
        $this->setViewData([
            'entity' => $this->fetchModel(Product::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->where('id', $id)->firstOrNew(),
            'categories' => $this->fetchModel(Category::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->get()->pluck('name', 'id')
        ]);
        parent::_prepareForm($id);
    }

    protected function _beforeCommit($entity)
    {
        $entity->name = $this->getParam('name');
        $filename = $this->_uploadFile($entity->id);
        blank($filename) ? null : $entity->image_url = $filename;
        $entity->category_id = $this->getParam('category_id');
        $entity->price = $this->getParam('price');
        $entity->description = $this->getParam('description');
        $entity->save();
    }

    protected function _uploadFile($id)
    {
        $image = request()->file('image_url');
        if (blank($image)) {
            return null;
        }
        $filePath = '/imgs/products/';
        $fileName = $id . '.' . $image->extension();
        Storage::disk('public')->putFileAs($filePath, $image, $fileName);
        return $filePath . $fileName;
    }
}
