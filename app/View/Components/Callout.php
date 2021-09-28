<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Callout extends Component
{
    public $title;
    public $desc;
    public $socialTwitter;
    public $socialFacebook;
    public $socialLinkden;
    public $socialGit;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title,$desc,$socialTwitter, $socialFacebook, $socialLinkden,$socialGit)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->socialTwitter=$socialTwitter;
        $this->socialFacebook = $socialFacebook;
        $this->socialLinkden = $socialLinkden;
        $this->socialGit = $socialGit;

    }


    public function render()
    {
        return view('components.callout');
    }
}
