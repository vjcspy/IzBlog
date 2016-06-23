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

class PostController extends BasicController {

    /**
     * @var PostCategory
     */
    private $postCategoryManagement;

    public function __construct() {
        $this->postCategoryManagement = app()['blogCategory'];
    }

    /**
     * @return PostCategory
     */
    public function getPostCategoryManagement() {
        return $this->postCategoryManagement;
    }

    public function getCategories() {
        try {
            $root = $this->getPostCategoryManagement()->getRoot();
            $childs = $root->getAncestorsAndSelfWithoutRoot();
            $this->setResponseData($childs);
        }
        catch (\Exception $e) {
            $this->setErrorData($e->getMessage());
        }
        return $this->responseJson();
    }

}