<div class="relative bg-rose-500 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <div>
            <!-- Card stats -->
            <div class="flex flex-wrap">

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> User </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$user}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                        <i data-feather="users" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <a href="{{route('admin.user.create')}}" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Blog </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$blog}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                                        <i data-feather="edit" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4"> 
                                <a href="{{route('admin.blog.create')}}" class="inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-600 hover:shadow-lg focus:bg-red-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Blog Category </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$blog_category}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                                        <i data-feather="list" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <a href="{{route('admin.blog-category.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-pink-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-pink-600 hover:shadow-lg focus:bg-pink-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Extracurricular </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$extracurricular}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-fuchsia-500">
                                        <i data-feather="award" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <a href="{{route('admin.extracurricular.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-fuchsia-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-fuchsia-600 hover:shadow-lg focus:bg-fuchsia-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>
<div class="px-4 md:px-10 mx-auto w-full -m-24">

    <div class="flex flex-wrap justify-center">
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Program </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$program}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-cyan-500">
                                <i data-feather="layers" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.program.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-cyan-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-cyan-600 hover:shadow-lg focus:bg-cyan-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Facility </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$facility}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-sky-500">
                                <i data-feather="clipboard" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.facility.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-sky-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-sky-600 hover:shadow-lg focus:bg-sky-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Learning Oportunity </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$learning_oportunities}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                                <i data-feather="book" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.learning-oportunity.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-600 hover:shadow-lg focus:bg-blue-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Success Story </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$success_stories}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-teal-500">
                                <i data-feather="check-circle" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.success-story.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-teal-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-teal-600 hover:shadow-lg focus:bg-teal-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-cyan-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
