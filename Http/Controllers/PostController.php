<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 6/23/16
 * Time: 11:25 PM
 */

namespace Modules\IzBlog\Http\Controllers;


use Modules\IzBlog\Repositories\PostCategory;
use Modules\IzCore\Http\Controllers\Api\BasicController;
use Illuminate\Http\Request;

class PostController extends BasicController {

    /**
     * @var PostCategory
     */
    private $postCategoryManagement;
    /**
     * @var \Modules\IzBlog\Repositories\Post
     */
    private $post;

    /**
     * PostController constructor.
     *
     * @param \Modules\IzBlog\Repositories\Post $post
     */
    public function __construct(\Modules\IzBlog\Repositories\Post $post) {
        $this->postCategoryManagement = app()['blogCategory'];
        $this->post                   = $post;
    }

    /**
     * @return PostCategory
     */
    public function getPostCategoryManagement() {
        return $this->postCategoryManagement;
    }

    /**
     * @return mixed
     */
    public function getCategories() {
        try {
            $this->setResponseData($this->getPostCategoryManagement()->getNestedCategoryJs());
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }

        return $this->responseJson();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function postCategories(Request $request) {
        try {
            $data = $this->getRequestData($request);
            $this->getPostCategoryManagement()->createNewCat($data['data']);
            $this->setResponseData($this->getPostCategoryManagement()->getNestedCategoryJs());
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }

        return $this->responseJson();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function postCategoryData(Request $request) {
        try {
            $data = $this->getRequestData($request);
            $this->getPostCategoryManagement()->saveDataCategory($data['data']);
            $this->setResponseData($this->getPostCategoryManagement()->getNestedCategoryJs());
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }

        return $this->responseJson();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function getPost(Request $request) {
        try {
            $data = $this->getRequestData($request);
            if (isset($data['article_id'])) {
                $post = $this->post->getById($data['article_id']);
                $this->setResponseData($post);
            }
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }

        return $this->responseJson();
    }

    public function postPost(Request $request) {
        try {
            $data = $this->getRequestData($request);
            if (isset($data['data'])) {
                $post = $this->post->save($data['data']);
                $this->setResponseData($post);
            }
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }

        return $this->responseJson();
    }

}