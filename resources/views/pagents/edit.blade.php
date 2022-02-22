<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contestants') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white shadow-lg hover:shadow-xl rounded-md overflow-hidden p-10">
                    <!-- <form action="" method="post" class="p-10" autocomplete="off" id="regform"> -->
                    {!! Form::open(['route'=> ['pagents.update', $pagents->p_id], 'files' => true, 'method'=>'PUT']) !!}
                        <div class="flex mb-4">
                            <div class="w-1/2">
                                <h2>Personal Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    {{Form::text('formNo',$pagents->f_no,['class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"Form Number ( INC/003/--- )"])}}
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('lname',$pagents->p_lname,['class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"Surname"])}}
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('oname',$pagents->p_other,['class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"Other Names"])}}
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    {{Form::text('fname',$pagents->p_fname,['class'=>'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline', 'placeholder'=>"First Names"])}}
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <div class="p-2">
                                    <select name="gender" id="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{$pagents->p_fname}}">
                                       
                                        <option value="" disabled selected>Gender</option>
                                        <option value="male" 
                                            @if ($pagents->p_gender == 'male')
                                                selected="selected"
                                            @endif
                                        >Male</option>
                                        <option value="female"
                                            @if ($pagents->p_gender == 'female')
                                                selected="selected"
                                            @endif
                                        >Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="D.O.B" value="{{ $pagents->p_dob->format('Y-m-d')}}" name="dob">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Age" value="{{ $pagents->p_age}}" name="age">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Mobile Number" value="{{ $pagents->p_phone}}" name="phone">
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="State Of Origin" value="{{ $pagents->p_soo}}" name="state">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="LGA" value="{{ $pagents->p_lga}}" name="lga">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Talent" value="{{ $pagents->p_talent}}" name="talent">
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    <textarea name="address" id="" placeholder="Residentail Address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="4">{{ trim($pagents->p_address)}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <h2>School Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name Of School" value="{{ $pagents->p_sch_name}}" name="schname">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Class" value="{{ $pagents->class}}"  name="class">
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="School Contact" value="{{ $pagents->p_sch_contact}}" name="schcontact">
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-full">
                                <div class="p-2">
                                    <textarea  name="schaddress" placeholder="School Address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" cols="30" rows="4">{{ trim($pagents->p_sch_add)}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <h2>Guardian Details</h2>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Name Of Guardian/Parent" value="{{ $pagents->p_gar_name}}" name="gname">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Guardian/Parent Occupation" value="{{ $pagents->p_gar_job}}" name="occupation">
                                </div>
                            </div>
                            <div class="w-1/4">
                                <div class="p-2">
                                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Guardian/Parent Phone" value="{{ $pagents->p_gar_phone}}" name="gphone">
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                                <div class="p-2">
                                    <div class="images-preview-div flex justify-between mx-auto w-5/6"> </div>
                                    <input type="file" name="images[]" placeholder="Choose image" multiple id="images1">
                                </div>
                            </div>
                            
            
                        <div class="flex mb-4 justify-end">
                            <div class="w-1/4 ">
                                <div class="p-5">
                                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 border border-blue-500 hover:border-transparent rounded text-lg" type="submit">
                                        Submit All Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
