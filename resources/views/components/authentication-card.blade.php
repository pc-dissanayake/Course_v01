<div class=" flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div class="w-full mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg ">
        <div class=" bg-gray-400 dark:bg-gray-900">
            <!-- Container -->
            <div class="mx-auto">
                <div class="flex justify-center px-6 py-12 min-h-screen">
                    <!-- Row -->
                    <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                        <!-- Col -->
                        <div class="w-full h-auto bg-gray-400 dark:bg-gray-800 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        @php
                            $randomnumber = rand(1,16)
                        @endphp
                            style="background-image: url('{{asset('assets/img/auth/'.$randomnumber.'.jpg')}}')"></div>
                        <!-- Col -->
                        <div class="w-full lg:w-7/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
                        {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
    </div>
</div>
