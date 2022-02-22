<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contestants') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ url('pagents/create') }}" class="float-right bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 border border-blue-500 hover:border-transparent rounded text-sm">Add New Contestant</a>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white shadow-lg hover:shadow-xl rounded-md overflow-hidden">
                    <table class="table table-auto w-full leading-normal">
                        <thead class="uppercase text-gray-600 text-xs font-semibold bg-gray-200">
                            <tr class="hidden md:table-row">
                                <th class="text-left p-3">NO</th>
                                <th class="text-left p-3">First Name</th>
                                <th class="text-left p-3">Last Name</th>
                                <th class="text-left p-3">Other Name</th>
                                <th class="text-left p-3">School Name</th>
                                <th class="text-left p-3">School Contact</th>
                                <th class="text-left p-3">Guardian Name</th>
                                <th class="text-left p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody class="flex-1 text-gray-700 sm:flex-none">
                                                
                                    @if (count($pagents)>1)
                                        @foreach ($pagents as $pagent )
                                            <tr class="border-t first:border-t-0 flex p-1 md:p-3 hover:bg-gray-100 md:table-row flex-col w-full flex-wrap">
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->f_no}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_fname}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_lname}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_other}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_sch_name}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_sch_contact}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >{{$pagent->p_gar_name}}</td>
                                                <td class="whitespace-nowrap p-1 md:p-3" >
                                                    <a href="{{ url('pagents/'.$pagent->p_id.'/edit') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 border border-blue-500 hover:border-transparent rounded text-sm" data>Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No Contestants</p>                        
                                    @endif
                                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
