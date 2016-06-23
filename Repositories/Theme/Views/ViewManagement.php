<?php
/**
 * Created by IntelliJ IDEA.
 * User: vjcspy
 * Date: 23/06/2016
 * Time: 11:05
 */

namespace Modules\IzBlog\Repositories\Theme\Views;


use Modules\IzBlog\Repositories\Theme\Views\Contract\ViewAbstract;
use Modules\IzCore\Repositories\Object\IzObject;

class ViewManagement extends IzObject {

    /**
     * @var \Modules\IzBlog\Entities\Theme\View
     */
    private $viewModel;

    protected $views = [];
    /**
     * @var \Modules\IzCore\Repositories\Theme
     */
    private $izTheme;

    /**
     * ViewManagement constructor.
     *
     * @param \Modules\IzBlog\Entities\Theme\View $viewModel
     * @param array                               $data
     */
    public function __construct(
        \Modules\IzBlog\Entities\Theme\View $viewModel,
        array $data = []
    ) {
        $this->viewModel = $viewModel;
        $this->izTheme   = app()['izTheme'];
        parent::__construct($data);
    }

    /**
     * Register view
     *
     * @param $className
     *
     * @throws \Exception
     */
    public function registerView($className) {
        /** @var ViewAbstract $viewInstance */
        $viewInstance = app()->make($className);
        if (is_null($viewInstance->getFileName()))
            throw new \Exception('FileName name must be string');

        if (is_null($viewInstance->getThemeName()))
            throw new \Exception('Must declare theme name');

        $view               = $this->getViewModel()->query()->firstOrNew(['name' => $this->getFileName()]);
        $view->share_layout = $viewInstance->isShareLayout() == true ? 1 : 0;
        $view->has_config   = $viewInstance->isHasConfig() == true ? 1 : 0;
        $view->theme_name   = $viewInstance->getThemeName();
        $view->path         = $className;
        $view->save();
    }

    /**
     * Return collections view by current theme
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getViewsCollectionByCurrentThemes() {
        $currentThemeName = $this->izTheme->getCurrentThemeName();

        return $this->viewModel->query()->where('theme_name', $currentThemeName)->get();
    }

    /**
     * @return \Modules\IzBlog\Entities\Theme\View
     */
    public function getViewModel() {
        return $this->viewModel;
    }

}