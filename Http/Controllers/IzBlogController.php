<?php namespace Modules\IzBlog\Http\Controllers;

use Modules\IzBlog\Repositories\Post;
use Modules\IzCore\Repositories\Object\SearchCriteria;
use Pingpong\Modules\Routing\Controller;

class IzBlogController extends Controller {

    /**
     * @var \Modules\IzBlog\Repositories\Post
     */
    protected $postRepository;

    /**
     * IzBlogController constructor.
     *
     * @param \Modules\IzBlog\Repositories\Post $post
     */
    public function __construct(
        Post $post
    ) {
        $this->postRepository = $post;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $searchCriteria = new SearchCriteria();
        $searchCriteria->setData('post_author', 4);

        return $this->postRepository->getList($searchCriteria)->first();
    }

}