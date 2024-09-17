<div>
    <div>

        <livewire:sana-hero-section/>
        <livewire:service-section/>
        <livewire:design/>


        {{--    section --}}

        <section class="bg-white



">
            <div class="py-8 px-4 mx-auto max-w-screen-xl w-full  lg:px-12">
                <div class="flex flex-col items-center justify-content-center">
                    <div class="flex lg:flex-row flex-col w-full  my-2 justify-start items-center">
                        <img class="w-full lg:w-60  rounded-3xl h-96 object-cover "
                             src="http://localhost:8002/images/image2.jpg" alt="image">
                        <div class="mx-1 h-full  px-7 flex flex-col text-center justify-between  items-center">
                            <div class="flex flex-row justify-center items-center my-3">
                            <span class="lg:text-[10vh] text-3xl font-bold my-3">
                                                            @lang('messages.d_s4')

                            </span>
                                <p class="pl-3">
                                    @lang('messages.d_s5')
                                </p>

                            </div>
                            <span class="lg:text-[8vh] xl:text-[9vh] text-3xl font-bold lg:my-3 ">

                                                            @lang('messages.d_s6')

                        </span>
                            <div class="flex flex-row justify-center items-center  lg:my-3">
                                <p class="p-7">
                                    @lang('messages.d_s7')                            </p>
                                <span class="lg:text-[10vh] text-3xl font-bold">
                                 @lang('messages.d_s8')

                            </span>

                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:flex w-full lg:bg-transparent bg-gray-200 rounded-3xl  lg:flex-row lg:justify-center  lg:items-center flex flex-row ">
                        <div
                            class="w-72 mr-1 h-24 bg-gray-200 lg:bg-gray-100 px-3 py-3 rounded-3xl  flex flex-row justify-center items-center ">
                            <div class="w-28  text-xl  tracking-tighter font-medium text-blue-600  ">
                                @lang('messages.d_s1')
                            </div>
                            <div class="text-sm tracking-tight">
                                @lang('messages.d_s2')
                            </div>

                        </div>
                        <div class=" w-full h-full flex flex-col justify-center items-end">

                            <a href="{{Route('contact')}}"
                               class=" h-24 w-full rounded-3xl bg-gray-200 flex flex-row justify-center items-center">
                                <div class="text-lg   font-medium text-blue-600 mr-1 ">
                                    @lang('messages.d_s3')
                                </div>


                            </a>

                        </div>
                    </div>


                    <div class="w-full  flex flex-col justify-between items-end  ">


                    </div>


                </div>
            </div>
        </section>


        {{--    about section --}}
        <div class="pt-8 pb-3 px-4 mx-auto max-w-screen-xl flex justify-center items-center text-center  lg:px-12">
            <div class="max-w-screen-md  ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900



">
                    @lang('messages.home_about')
                </h2>

            </div>
        </div>
        <section class="bg-white



">
            <div
                class="pb-8 gap-8 items-center px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full rounded-3xl " src="http://localhost:8002/images/image9.jpg"
                     alt="dashboard image">
                <div class=" md:mt-0">

                    <p  dir="{{(App::getLocale() === 'en') ? "ltr" : "rtl"}}" class="text-gray-500 mt-8 mb-8 sm:text-xl



">
                        @lang('messages.home_about_description')
                    </p>
                    <a href="{{ Route('about') }}"
                       class="inline-flex items-center rounded-3xl text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium text-sm px-5 py-2.5 text-center



">
                        @lang('messages.home_about_cta')
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


    </div>


</div>

