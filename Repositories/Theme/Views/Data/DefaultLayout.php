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


    const PAGE_SIZE = 10;
    /**
     * @var \Illuminate\Http\Request
     */
    private $request;

    /**
     * @var \Modules\IzBlog\Entities\Post
     */
    private $post;
    /**
     * @var \Modules\IzBlog\Repositories\PostCategory
     */
    private $postCategory;
    private $_requestData;

    /**
     * DefaultLayout constructor.
     *
     * @param \Illuminate\Http\Request                  $request
     * @param \Modules\IzBlog\Entities\Post             $post
     * @param \Modules\IzBlog\Repositories\PostCategory $postCategory
     */
    public function __construct(
        \Illuminate\Http\Request $request,
        \Modules\IzBlog\Entities\Post $post,
        \Modules\IzBlog\Repositories\PostCategory $postCategory
    ) {
        $this->postCategory = $postCategory;
        $this->post         = $post;
        $this->request      = $request;
    }

    /**
     * @return \Modules\IzBlog\Entities\Post
     */
    public function getPost() {
        return $this->post;
    }

    /**
     * @return array []
     */
    public function handle() {
        // TODO: Implement handle() method.
        $builder     = $this->getPost()->query();
        $requestData = $this->getRequestData();
        /*add filter categories*/
        if (isset($requestData['categoryId']) && !!$requestData['categoryId']) {
            $builder->where('category_id', $requestData['categoryId']);
        }

        /* add Paging*/
        if (isset($requestData['page']) && !!$requestData['page']) {
            $builder = $builder->paginate(self::PAGE_SIZE, null, null, $requestData['page']);
        }
        else {
            $builder = $builder->paginate(self::PAGE_SIZE, null, null, 1);
        }
        $posts = $builder->toArray();

        return [
            'posts'           => $posts,
            'categories'      => $this->getCategoriesData(),
            'numOfPage'       => $this->getPagesNumber($posts),
            'currentCategory' => (isset($requestData['categoryId']) && !!$requestData['categoryId']) ? $requestData['categoryId'] : ''
        ];
    }

    /**
     * @return \Illuminate\Http\Request
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Lay het tat ca categories
     *
     * @return array
     */
    protected function getCategoriesData() {
        return $this->postCategory->getAllChildren();
    }

    /**
     * @param $post
     *
     * @return array
     */
    protected function getPagesNumber($post) {
        if ((count($post) % self::PAGE_SIZE) > 0)
            $numOfPost = floor($post['total'] / self::PAGE_SIZE) + 1;
        else
            $numOfPost = floor($post['total'] / self::PAGE_SIZE);
        $data = [];
        for ($i = 1; $i <= $numOfPost; $i++) {
            if (isset($this->getRequestData()['page']) && $this->getRequestData()['page'] == $i)
                $data[$i] = ['page' => $i, 'active' => true];
            else
                $data[$i] = ['page' => $i, 'active' => $i == 1];
            if ($i > 3)
                $i = $numOfPost - 1;
        }

        return $data;
    }

    /**
     * @return array
     */
    private function getRequestData() {
        if (is_null($this->_requestData))
            $this->_requestData = $this->getRequest()->all();

        return $this->_requestData;
    }
}