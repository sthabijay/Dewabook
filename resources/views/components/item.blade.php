<div class="bg-white w-full h-20 rounded-lg grid grid-cols-4 justify-between px-3 shadow-xl border border-slate-100">
<div class="flex flex-col col-span-2 justify-center">
    <div class="flex">
        <h1 class="text-xl">{{$item->itemName}}</h1>
        @if($item->tag)
            <div class="bg-blue-400 rounded-md px-2 mx-2 text-sm flex justify-center items-center">{{$item->tag}}</div>
        @endif        
    </div>    
    <h2>{{ \Carbon\Carbon::parse($item->created_at)->format('F j') }}</h2>
</div>
<div @class(['bg-red-100' => !($item->isIn), "text-xl flex items-center px-2 bg-red-50"])>
{{$item->isIn ? "" : "₹".$item->balance}}
</div>
<div @class(['bg-green-100' => ($item->isIn), "text-xl flex items-center px-2 bg-green-50"])>
{{$item->isIn ? "₹".$item->balance : ""}}
</div>
</div>