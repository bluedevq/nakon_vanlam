<?php

namespace App\Http\Controllers\Module\Backend;

use App\Model\Entities\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\MessageBag;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Module\Backend
 */
class CategoryController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
        $this->registModel(Category::class);
    }

    public function index()
    {
        $this->setViewData([
            'entities' => $this->fetchModel(Category::class)->where(function ($q) {
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
            $entity = new Category();
            $id = $entity->getNextInsertId();
            $entity->id = $id;
            $this->_beforeCommit($entity);
            DB::commit();
            return $this->_to('category.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception);
        }
        return $this->_to('category.create')->withInput($this->getParams())->withErrors(new MessageBag(['Lỗi không lưu được']));
    }

    public function update($id)
    {
        DB::beginTransaction();
        try {
            $entity = $this->fetchModel(Category::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->where('id', $id)->first();
            $this->_beforeCommit($entity);
            DB::commit();
            return $this->_to('category.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception);
        }
        return $this->_to('category.edit', ['id' => $id])->withInput($this->getParams())->withErrors(new MessageBag(['Lỗi không lưu được']));
    }

    protected function _beforeCommit($entity)
    {
        $entity->name = $this->getParam('name');
        $entity->save();
    }

    protected function _prepareForm($id = null)
    {
        $this->setViewData([
            'entity' => $this->fetchModel(Category::class)->where(function ($q) {
                $q->orWhere('deleted_at', '');
                $q->orWhereNull('deleted_at');
            })->where('id', $id)->firstOrNew(),
        ]);
        parent::_prepareForm($id);
    }
}
