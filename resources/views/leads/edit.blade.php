@extends('theme.admin')

@section('content')
<style>
  .btn {
    @apply font-bold py-2 px-4 rounded;
  }
  .btn-blue {
    @apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @apply bg-blue-700;
  }
</style>
    <div class="bg-gray-400 relative mt-32 pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute bg-gray-400 top-0 w-50 h-full bg-center bg-cover"
          style="
            background-image: url('');
          ">
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-8/12 px-4 ml-auto mr-auto text-center">
                        <div class="pr-12">
                            <h1 class="text-gray-700 font-semibold text-5xl">
                            Edit Lead
                            </h1>
                           
                        </div>
                    </div>
                </div>
            </div>
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
          <form class="w-full max-w-lg" action="{{ route('leads.update',$lead->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')  
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                    </label>
                    <input class=" form-control appearance-none block w-full bg-gray-100 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                    id="grid-first-name" name="name" value="{{ $lead->name }}"  type="text" placeholder="Jane">
                    <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="mobile-number">
                        Mobile Number
                    </label>
                    <input class="form-control appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="mobile-number" name="mobile" value="{{ $lead->mobile }}"  type="number" placeholder="Mobile Number">
                     @error('mobile')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="flex flex-wrap -mx-3 mb-2">
                    
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Service
                    </label>
                    <div class="relative">
                        <select class="form-control block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                         id="service" name="service" value="{{ $lead->service }}" >
                        <option>Washing Machine</option>
                        <option>Microwave</option>
                        <option>Refrigerator</option>
                        </select>
                        @error('service')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                        Message
                    </label>
                    <input class="form-control appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="message" type="text" name="message" value="{{ $lead->message }}" placeholder="message">
                    @error('message')
                       <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <button type="submit" class="bg-blueGray-200 hover:bg-blueGray-700 text-black font-bold py-2 px-4 rounded"> Submit </button>
                   <button type="submit" href="{{ URL::previous() }}" class="bg-blueGreen-200 hover:bg-blueGray-700 text-black font-bold py-2 px-4 rounded"> Back </button>
  
                    </div>
                </div>
            </form>
            
        </div>
       
     <style>
  .btn {
    @apply font-bold py-2 px-4 rounded;
  }
  .btn-blue {
    @apply bg-blue-500 text-white;
  }
  .btn-blue:hover {
    @apply bg-blue-700;
  }
</style>  
            
    </div>
@endsection