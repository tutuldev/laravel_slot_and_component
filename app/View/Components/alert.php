<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{

    public $type;
    public $message;
    public $dismissable;
    protected $types =[
        "success",
        "danger",
        "info",
    ];

public function __construct(string $type="info", string $message="NO message",$dismissable=false)
{
    $this->type = $type;
    $this->message = $message;
    $this->dismissable = $dismissable;
}

public function validType(){
    return in_array($this->type,$this->types) ? $this->type : "info";
}
    
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
