<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{

    public $type;
    public $dismissable;
    protected $types =[
        "success",
        "danger",
        "info",
    ];

public function __construct(string $type="info",$dismissable=false)
{
    $this->type = $type;
    $this->dismissable = $dismissable;
}

public function validType(){
    return in_array($this->type,$this->types) ? $this->type : "info";
}
public function link($text,$target="#"){
    return new HtmlString('<a href="'.$target.'" class="alert-link">' .$text.'</a>') ;
}

    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
