<div>
    <div role="alert">
        <div {{$attributes->merge(['class'=>'bg-red-500 text-white font-bold rounded-t px-4 py-2']) }}>
            {{$title}}
        </div>
        <div class="border border-t-0 border-{{$color}}-400 rounded-b bg-{{$color}}-100 px-4 py-3 text-{{$color}}-700">
            <p>{{$content}}</p>
        </div>
    </div>
</div>
