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
    public $img;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title,$desc,$socialTwitter, $socialFacebook, $socialLinkden,$socialGit,$img)
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->socialTwitter=$socialTwitter;
        $this->socialFacebook = $socialFacebook;
        $this->socialLinkden = $socialLinkden;
        $this->socialGit = $socialGit;
        $this->img = $img;
    }


    public function render()
    {
        return view('components.callout');
    }
}
