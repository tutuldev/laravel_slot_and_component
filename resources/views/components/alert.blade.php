{{--
      <div  {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType,
        'role'=>$attributes->prepends('alert')
        ])}} >
        @isset($title)
        <h4 class="alert-heading">{{$title}}</h4>
        <hr>
        @endisset
        @if ($slot->isEmpty())
        <p>this is default content if the slot is empty</p>
        @else
        {{$slot}}
        @endif
          @if ($dismissable)
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          @endif
        </div> --}}


{{-- when alert-h4 class dinamic for add another class we need to marge --}}

{{-- <div  {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType,
    'role'=>$attributes->prepends('alert')
    ])}} >
    @isset($title)
    <h4 {{$title->attributes->class(['alert-heading'])}}>{{$title}}</h4>
    <hr>
    @endisset
    @if ($slot->isEmpty())
    <p>this is default content if the slot is empty</p>
    @else
    {{$slot}}
    @endif
      @if ($dismissable)
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      @endif
    </div> --}}

{{-- cut for inline component --}}
{{-- and name change of  validType --}}


<div  {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType,
    'role'=>$attributes->prepends('alert')
    ])}} >
    @isset($title)
    <h4 {{$title->attributes->class(['alert-heading'])}}>{{$title}}</h4>
    <hr>
    @endisset
    @if ($slot->isEmpty())
    <p>this is default content if the slot is empty</p>
    @else
    {{$slot}}
    @endif
      @if ($dismissable)
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      @endif
    </div>
