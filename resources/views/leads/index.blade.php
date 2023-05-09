@extends('theme.admin')

@section('content')
<div class="bg-gray-400 relative mt-32 pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute bg-gray-400 top-0 w-50 h-full bg-center bg-cover"
          style="
            background-image: url('');
          ">
            <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                    <div class="w-full lg:w-full px-4 ml-auto mr-auto mb-8 text-center">
                        <div class="pr-12">
                            <h1 class="text-gray-700 font-semibold text-5xl">
                            Home Service Leads List
                            </h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

<div class="relative overflow-x-auto">
     
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white-700 uppercase bg-blueGray-700 dark:bg-blueGray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    SI.No
                </th>
                <th scope="col" class="px-6 py-3">
                   lead Name
                </th>
                <th scope="col" class="px-6 py-3">
                    lead Mobile
                </th>
                <th scope="col" class="px-6 py-3">
                    lead Service
                </th>
                <th scope="col" class="px-6 py-3">
                    lead Message
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leads as $lead)
           
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                
                <td class="px-6 py-4">
                   {{ $lead->id }}
                </td>
                <td class="px-6 py-4">
                    {{ $lead->name }}
                </td>
                <td class="px-6 py-4">
                   {{ $lead->mobile }}
                </td>
                 <td class="px-6 py-4">
                   {{ $lead->service }}
                </td>
                 <td class="px-6 py-4">
                   {{ $lead->message }}
                </td>
                <td class="px-6 py-4">
                  <form action="{{ route('leads.destroy',$lead->id) }}" method="Post">
                               <button class="bg-blueGray-200 hover:bg-blueGray-700 text-black font-bold py-2 px-4 rounded"> 
                                 <a class="btn btn-primary" href="{{ route('leads.edit',$lead->id) }}">Edit</a> 
                               </button>
                                
                                @csrf
                                @method('DELETE')
                              
                                <button type="submit" class="bg-blueGray-200 hover:bg-blueGray-700 text-black font-bold py-2 px-4 rounded"> Delete </button>
                  </form>
                </td>
                
            </tr>
             @endforeach
            
        </tbody>
    </table>
</div>

        {!! $leads->links() !!}
   @endsection