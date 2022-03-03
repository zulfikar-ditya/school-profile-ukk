<div class="relative bg-rose-500 dark:bg-rose-900 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <div>
            <!-- Card stats -->
            <div class="flex flex-wrap">

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
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
                    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Blog </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$blog}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                        <i data-feather="edit" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4"> 
                                <a href="{{route('admin.blog.create')}}" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Blog Category </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$blog_category}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                        <i data-feather="list" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <a href="{{route('admin.blog-category.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Extracurricular </h5> 
                                    <span class="font-semibold text-4xl text-blueGray-700"> {{$extracurricular}} </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                        <i data-feather="award" class=""></i> 
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <a href="{{route('admin.extracurricular.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
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
            <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Program </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$program}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                <i data-feather="layers" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.program.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Facility </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$facility}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                <i data-feather="clipboard" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.facility.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Learning Oportunity </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$learning_oportunities}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                <i data-feather="book" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.learning-oportunity.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-6/12 xl:w-3/12 p-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-slate-800 rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                            <h5 class="text-blueGray-400 uppercase font-bold text-xs"> Success Story </h5> 
                            <span class="font-semibold text-4xl text-blueGray-700"> {{$success_stories}} </span>
                        </div>
                        <div class="relative w-auto pl-4 flex-initial">
                            <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-rose-500">
                                <i data-feather="check-circle" class=""></i> 
                            </div>
                        </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                        <a href="{{route('admin.success-story.create')}}" id="'create-user'" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-rose-600 hover:shadow-lg focus:bg-rose-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-rose-700 active:shadow-lg transition duration-150 ease-in-out w-full text-center mt-5">create</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-10 px-4">
        <x-card :title="Str::headline('new Messages')">
            <x-link-purple :link="route('admin.message.index')" :id="''">Show All</x-link-purple>
            <div class="flex flex-col mt-4">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="border-b bg-gray-900 text-white">
                                    <tr class="text-left">
                                        @foreach ($dataTables as $item)
                                        <th class="px-6 py-4"> {{Str::headline($item)}}</th>
                                        @endforeach
                                        <th class="px-6 py-4"> Options </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $item)
                                    <tr class="bg-white even:bg-gray-100 hover:bg-gray-100 dark:bg-gray-700 dark:even:bg-slate-800 dark:hover:bg-slate-800 dark:bg-slate-700 dark:even:bg-slate-800 dark:hover:bg-slate-800">
                                        @foreach ($dataTables as $tableValue)
                                        <td class="text-gray-900 dark:text-white font-light px-6 py-4"> {{$item->$tableValue}}</td>
                                        @endforeach
                                        <td class="text-gray-900 dark:text-white font-light px-6 py-4">
                                            <x-link-amber :link="route('admin.message.edit', $item)" :id="'edit'">Edit</x-link-amber>
                                            <x-link-cyan :link="route('admin.message.show', $item)" :id="'show'">Show</x-link-cyan>
                                            <x-link-rose :link="route('admin.message.show', $item)" :id="'btn-delete-'.$item->id">
                                                Delete
                                            </x-link-rose>
                                            <x-link-purple :link="route('admin.message.read', $item)" :id="'link-read-'.$item->id">Mark As Read</x-link-purple>
                                            <form action="{{route('admin.message.show', $item)}}" method="post" id="form-delete-{{$item->id}}">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                            <form action="{{route('admin.message.read', $item)}}" method="post" id="form-read-{{$item->id}}">
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</div>

@foreach ($message as $item)
<script>
    var btn = document.getElementById('btn-delete-{{$item->id}}');
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        swal({
                title: "Are you sure?", 
                text: "Once deleted, you will not be able to recover this record!", 
                icon: "warning", 
                buttons: true, 
                dangerMode: true 
            }).then((willDelete) => {
                if (willDelete) {
                    document.getElementById('form-delete-{{$item->id}}').submit()
                } else { 
                    swal({
                        title: "Fyuuh!!!",
                        text: 'Your record is safe!',
                        icon: 'success'
                    }); 
                } 
            });
    });
    var btn_read = document.getElementById('link-read-{{$item->id}}');
    btn_read.addEventListener('click', (e) => {
        e.preventDefault();
        swal({
                title: "Are you sure?", 
                text: "Want to mark as read this record?", 
                icon: "warning", 
                buttons: true, 
                dangerMode: true 
            }).then((willDelete) => {
                if (willDelete) {
                    document.getElementById('form-read-{{$item->id}}').submit()
                } else { 
                    swal({
                        title: "Fyuuh!!!",
                        text: 'Your record is safe!',
                        icon: 'success'
                    }); 
                } 
            });
    });
</script>
@endforeach