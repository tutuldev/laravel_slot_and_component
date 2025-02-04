
      <div  {{$attributes->class(['alert-dismissable fade show'=>$dismissable])->merge(['class'=>'alert alert-'. $validType,
        'role'=>$attributes->prepends('alert')
        ])}} >
          {{$message}}
          @if ($dismissable)
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          @endif
        </div>
