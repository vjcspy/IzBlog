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


    const PAGE_SIZE = 5;
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
        $requestData = $this->getRequest()->all();
        $builder     = $this->getPost()->query();

        /*add filter categories*/
        if (isset($requestData['categoryId'])) {
            $builder->where('category_id', $requestData['categoryId']);
        }

        /* add Paging*/
        if (isset($requestData['page'])) {
            $builder = $builder->paginate(self::PAGE_SIZE, null, null, $requestData['page']);
        }
        else {
            $builder = $builder->paginate(self::PAGE_SIZE, null, null, 1);
        }

        return [
            'posts'      => $builder->toArray(),
            'categories' => $this->getCategoriesData()
        ];
    }

    /**
     * @return \Illuminate\Http\Request
     */
    public function getRequest() {
        return $this->request;
    }

    protected function getCategoriesData() {
        return $this->postCategory->getAllChildren();
    }
}