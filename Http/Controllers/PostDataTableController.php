<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 06/09/2016
 * Time: 15:39
 */

namespace Modules\IzBlog\Http\Controllers;


use Illuminate\Http\Request;
use Response;
use Modules\IzAdmin\Http\Controllers\DataTable\Contract\DataTableAbstract;
use Modules\IzAdmin\Http\Controllers\DataTable\Contract\DataTableInterface;

/**
 * Class PostDataTableController
 *
 * @package Modules\IzBlog\Http\Controllers
 */
class PostDataTableController extends DataTableAbstract implements DataTableInterface {

    /**
     * PostDataTableController constructor.
     */
    public function __construct() {
        /*override image folder*/
        $this->setModel(app()->make('\Modules\IzBlog\Entities\Post'));
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function getIndex(Request $request) {
        $requestData = $this->getRequestData($request);
        $this->processSearch($requestData);
        $dataArticle = $this->getData();
        $data
                     = [
            "draw"            => $requestData['draw'],
            "recordsTotal"    => 4,
            "recordsFiltered" => 4,
            "data"            => $dataArticle
        ];

        return Response::json($data);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function postSave(Request $request) {
        $requestData = $this->getRequestData($request);
        $model       = $this->getModel();

        if (!isset($requestData['id']))
            $requestData['id'] = null;
        $article = $model->query()->firstOrCreate(['id' => $requestData['id']]);
        if ($article->update($requestData))
            return Response::json($article, 200);
        else
            return Response::json($article, 303);
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function postDelete(Request $request) {
        $requestData = $this->getRequestData($request);
        $model       = $this->getModel();
        $article     = $model->query()->where(['id' => $requestData['id']])->firstOrFail();
        if ($article->delete())
            return Response::json($article, 200);
        else
            return Response::json($article, 303);
    }
}