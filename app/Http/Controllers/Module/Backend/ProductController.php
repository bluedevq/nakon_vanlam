<?php

namespace App\Http\Controllers\Module\Backend;

use App\Model\Entities\Category;
use App\Model\Entities\Product;
use Core\Providers\Facades\Storages\BaseStorage;
use Illuminate\Http\UploadedFile;
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
            })->get()
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
            $entity->name = $this->getParam('name');
            $image = request()->file('image_url');
            $filePath = '/imgs/products/';
            $fileName = $id . '.' . $image->extension();
            Storage::disk('public')->putFileAs($filePath, $image, $fileName);
            $entity->image_url = $filePath . $fileName;
            $entity->category_id = $this->getParam('category_id');
            $entity->save();
            DB::commit();
            return $this->_to('product.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception);
        }
        return $this->_to('product.create')->withInput($this->getParams())->withErrors(new MessageBag(['Lỗi không lưu được']));
    }

    protected function _prepareForm($id = null)
    {
        $this->setViewData([
            'categories' => $this->fetchModel(Category::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->get()->pluck('name', 'id')
        ]);
        parent::_prepareForm($id);
    }
}
