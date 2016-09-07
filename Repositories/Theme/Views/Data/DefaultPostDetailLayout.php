<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 07/09/2016
 * Time: 17:42
 */

namespace Modules\IzBlog\Repositories\Theme\Views\Data;


use Modules\IzCore\Repositories\Theme\View\AdditionViewInterface;

class DefaultPostDetailLayout implements AdditionViewInterface {

    private $post;
    private $request;
    private $postManagement;

    public function __construct(
        \Illuminate\Http\Request $request,
        \Modules\IzBlog\Entities\Post $post,
        \Modules\IzBlog\Repositories\Post $postManagement
    ) {
        $this->post           = $post;
        $this->request        = $request;
        $this->postManagement = $postManagement;
    }

    /**
     * @return \Modules\IzBlog\Repositories\Post
     */
    public function getPostManagement() {
        return $this->postManagement;
    }

    /**
     * @return \Modules\IzBlog\Entities\Post
     */
    public function getPost() {
        return $this->post;
    }

    /**
     * @return \Illuminate\Http\Request
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * @return array []
     */
    public function handle() {
        // TODO: Implement handle() method.
        $requestData = $this->getRequest()->all();
        if ($requestData['post_id']) {
            $postData = $this->getPostManagement()->getById($requestData['post_id'])->toArray();
        }
        else
            $postData = false;

        return [
            'postData' => $postData
        ];
    }
}