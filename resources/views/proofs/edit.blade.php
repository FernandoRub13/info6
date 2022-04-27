<x-guest-layout>

<div class="container mx-auto py-8">
    <div class="grid md:grid-cols-3">
        <div class="mb-4 mx-4">
            <h1 class="mb-4 text-blue-500 text-3xl font-bold"> Proof Edit </h1>
@if($errors->any())
            <ul class="list-disc list-inside text-sm text-red-500">
                @foreach($errors->all() as $error)
                <li class="">{{ $error }}</li>
                @endforeach
            </ul>
@endif
        </div>
        <div class="col-span-2 bg-white shadow rounded-lg overflow-auto">
        <form action="{{route('proofs.update',['proof'=>$proof->id])}}" method="POST" novalidate>
            <div class="space-y-3 p-4">

        @csrf
        @method('PUT')
        

                                        <div class="">
            <label class="block text-sm font-semibold text-gray-700" for="name">Name</label>
                    <input
            name="name"
                        type="text"
            maxlength="255"
                        class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded String"
                        required="required"
                        value="{{old('name',$proof->name)}}"
            >
                    @if($errors->has('name'))
            <p class="mt-0.5 text-sm text-red-500">{{$errors->first('name')}}</p>
            @endif
        </div>
                                <div class="">
            <label class="block text-sm font-semibold text-gray-700" for="description">Description</label>
                    <input
            name="description"
                        type="text"
            maxlength="255"
                        class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded String"
                        required="required"
                        value="{{old('description',$proof->description)}}"
            >
                    @if($errors->has('description'))
            <p class="mt-0.5 text-sm text-red-500">{{$errors->first('description')}}</p>
            @endif
        </div>
                                <div class="">
            <label class="block text-sm font-semibold text-gray-700" for="url_clean">Url_Clean</label>
                    <input
            name="url_clean"
                        type="text"
            maxlength="255"
                        class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded String"
                        required="required"
                        value="{{old('url_clean',$proof->url_clean)}}"
            >
                    @if($errors->has('url_clean'))
            <p class="mt-0.5 text-sm text-red-500">{{$errors->first('url_clean')}}</p>
            @endif
        </div>
                                                        </div>
        <div class="bg-gray-100 flex items-center justify-between px-4 py-5 space-x-3">
            <a class="text-blue-500"  href="{{ url()->previous() }}">Back</a>
            <button class="px-4 py-1.5 border-lg bg-blue-500 text-blue-50 font-semibold rounded hover:bg-blue-700">Update Proof</button>
        </div>
    </form>
    </div>
</div>
</x-guest-layout>
