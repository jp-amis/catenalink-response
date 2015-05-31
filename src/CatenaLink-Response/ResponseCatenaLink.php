<?php
namespace Amis\Catena\Link;

use Amis\Catena\BaseCatenaLink;
use Illuminate\Contracts\View\Factory as ViewFactory;
class ResponseCatenaLink extends BaseCatenaLink {
    protected $name = "Response";
    /**
     * @var Illuminate\Contracts\View\Factory
     */
    private $_viewFactory;
    public function __construct(ViewFactory $viewFactory){

        $this->_response = $viewFactory;

    }
    public function renderView($viewName) {
        return $this->_viewFactory->make($viewName);
    }
}