<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 07/09/2016
 * Time: 16:10
 */

namespace Modules\IzBlog\Repositories\Theme\Views\Data;


use Modules\IzCore\Repositories\Theme\View\AdditionViewInterface;

class DefaultLayout implements AdditionViewInterface {

    private $request;

    /**
     * @return \Modules\IzBlog\Entities\Post
     */
    public function getPost() {
        return $this->post;
    }

    private $post;

    public function __construct(
        \Illuminate\Http\Request $request,
        \Modules\IzBlog\Entities\Post $post
    ) {
        $this->post    = $post;
        $this->request = $request;
    }

    /**
     * @return []
     */
    public function handle() {
        // TODO: Implement handle() method.
        $requestData = $this->getRequest()->all();
        if (isset($requestData['page'])) {
            $builder = $this->getPost()->query()->orderBy('created_at', 'desc')->paginate(2, null, null, $requestData['page']);
        }
        else {
            $builder = $this->getPost()->query()->orderBy('created_at', 'desc')->paginate(2, null, null, 1);
        }

        return [
            'posts' => $builder->toArray(),
        ];
    }

    /**
     * @return \Illuminate\Http\Request
     */
    public function getRequest() {
        return $this->request;
    }
}