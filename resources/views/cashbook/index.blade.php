<x-layout>
    <div class="flex flex-col gap-3 mt-12">
        <div class="bg-slate-50 w-full p-3 rounded-lg drop-shadow-2xl flex flex-col px-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl">Balance: {{$balance = 5000}}</h1>
                <h1 class="text-2xl">Today: {{$todayBalance = -500}}</h1>               
            </div>
            <div class="flex justify-between items-center mt-1">
                <h1>{{$bookName = "Wallet"}}</h1>
                <div class="flex gap-2">
                    <button class="bg-white px-3 rounded-lg border border-slate-100 shadow-lg hover:bg-amber-50 cursor-pointer">Change Book</button>
                    <div class="w-10 h-10 rounded-full bg-red-400"></div>
                </div>
            </div>    
        </div>
        <div class="bg-slate-50 w-full min-h-[600px] rounded-lg p-3 relative drop-shadow-2xl flex flex-col justify-between">
            <div>
                <div class="grid grid-cols-4 px-3 mb-1">
                    <h1 class="col-span-2">Entries</h1>
                    <h2 class="px-2">Out</h2>
                    <h2 class="px-2">In</h2>
                </div>
                <div class="flex flex-col gap-2">
                @foreach($items as $item)
                    <x-item :item="$item">                        
                    </x-item>
                @endforeach
                </div>   
            </div>
            <div class="flex gap-2 w-full">
                <button class="min-w-60 w-full p-3 bg-red-200 border border-slate-100 shadow-xl rounded-lg hover:border-slate-200 hover:bg-red-300 cursor-pointer">Out</button>
                <button class="min-w-60 w-full p-3 bg-green-200 border border-slate-100 shadow-xl rounded-lg hover:border-slate-200 hover:bg-green-300 cursor-pointer">In</button>
            </div>            
        </div>
    </div>
</x-layout>