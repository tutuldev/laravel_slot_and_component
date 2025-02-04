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
    public $validType;
    protected $types =[
        "success",
        "danger",
        "info",
    ];

    // for internal component
// public function __construct(string $type="info",$dismissable=false)
// {
//     $this->type = $type;
//     $this->dismissable = $dismissable;
// }
// for inline component
public function __construct(string $type="info",$dismissable=false)
{
    $this->type = $type;
    $this->dismissable = $dismissable;
    $this->validType = $this->getValidType();
}

public function getValidType(){
    return in_array($this->type,$this->types) ? $this->type : "info";
}
public function link($text,$target="#"){
    return new HtmlString('<a href="'.$target.'" class="alert-link">' .$text.'</a>') ;
}

    public function render(): View|Closure|string
    {
        // return view('components.alert');
        // inline component
        // validType() কে __construct() এর মধ্যে ব্যবহার করতে হবে। inline er time

    return <<<'blade'
    <div {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType, 'role'=>$attributes->prepends('alert')])}} >
        @isset($title)
        <h4 {{$title->attributes->class(['alert-heading'])}}>{{$title}}</h4>
        <hr>
        @else
        <h4 class="alert-heading">Default Title</h4>
        <hr>
        @endisset
        @if ($slot->isEmpty())
        <p>{{ $defaultContent ?? 'This is default content if the slot is empty' }}</p>
        @else
        {{$slot}}
        @endif
        @if ($dismissable)
        <button type="button" class="btn-close {{$dismissableClass ?? ''}}" data-bs-dismiss="alert" aria-label="Close"></button>
        @endif
    </div>
    blade;

    }
}


