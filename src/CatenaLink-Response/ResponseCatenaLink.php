<?php
namespace Amis\Catena\Link;

use Amis\Catena\BaseCatenaLink;
use Illuminate\Contracts\View\Factory as ViewFactory;

/**
 * This is a Link responsable for creating the Response for the Controller
 * @package Amis\Catena\Link
 */
class ResponseCatenaLink extends BaseCatenaLink {
    /** @var string $name */
    protected $name = "Response";
    /** @var Illuminate\Contracts\View\Factory $_viewFactory */
    private $_viewFactory;

    /**
     * Constructor with dependency injection
     * @param ViewFactory $viewFactory
     */
    public function __construct(ViewFactory $viewFactory){
        $this->_viewFactory = $viewFactory;
    }

    /**
     * Returns a view instance
     * @param string $viewName
     * @return \Illuminate\Contracts\View\View
     */
    public function view($viewName) {
        return $this->_viewFactory->make($viewName);
    }
}