
<section class="bg-white ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl w-full  lg:px-12">
        <div class="flex flex-col items-center justify-center h-auto w-full text-center">
            <div class="text-3xl font-bold" dir="{{ session()->get('locale') == 'en' ? 'ltr' : 'rtl' }}">
                @lang('messages.d_title')
            </div>
            <div class="text-gray-600 my-8 lg:w-3/5 w-full ">
                @lang('messages.d_description')

            </div>

            <div class="h-auto w-full lg:flex lg:flex-row lg:items-end flex flex-col ">

                <div class="w-full bg-gray-100 h-72 lg:rounded-t-3xl px-12 py-12 lg:rounded-none lg:rounded-bl-3xl rounded-3xl my-1">
                    <div class="flex flex-col justify-between h-full w-full">
                        <img class="w-12 h-12 px-3 bg-white rounded-full" src="http://localhost:8002/prod/i2.svg" alt="icon">
                        <h1 class="text-2xl font-bold w-1/3 text-left">
                            @lang('messages.d_container1')
                        </h1>
                    </div>

                </div>
                <div class=" relative w-full bg-blue-600 h-96 overflow-clip lg:rounded-none lg:rounded-t-3xl rounded-3xl my-1">
                    <img class=" absolute -right-8 -top-8  w-48 h-48   rounded-full" src="http://localhost:8002/images/image3.jpg" alt="image">

                    <div class=" flex flex-col px-12  py-12 justify-between h-full w-full text-white">

                        <img class=" invert  w-12 h-12 px-3 border-black border-2 rounded-full" src="http://localhost:8002/prod/i3.svg" alt="icon">
                        <h1 class="text-2xl font-bold w-1/3 text-left">
                            @lang('messages.d_container2_title')
                        </h1>
                        <h1 class="opacity-80 text-left">
                            @lang('messages.d_container2_subtitle')
                        </h1>

                        <a href="{{Route('contact')}}" class="text-lg   text-left">
                            @lang('messages.d_container2_cta')
                        </a>


                    </div>

                </div>
                <div class="w-full bg-gray-100 h-72 lg:rounded-t-3xl px-12 py-12 lg:rounded-br-3xl rounded-3xl lg:rounded-none  my-1">
                    <div class="flex flex-col justify-between h-full w-full">
                        <img class="w-12 h-12 px-3 bg-white rounded-full" src="http://localhost:8002/prod/i4.svg" alt="icon">
                        <h1 class="text-2xl font-bold w-1/3 text-left">
                            @lang('messages.d_container3')
                        </h1>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
