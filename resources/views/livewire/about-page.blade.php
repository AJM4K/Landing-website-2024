<div>
    <section class=" bg-white">
        <div class="w-full h-auto flex-col   justify-center items-center pt-8 lg:pt-16 pb-3 px-4 mx-auto max-w-screen-xl  text-center  lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl ">
                @lang('messages.about_us_title')
            </h1>
            <p dir="{{(App::getLocale() === 'en') ? "ltr" : "rtl"}}" class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 ">
                @lang('messages.about_us_description')
            </p>

            <div class="w-full h-auto flex-col  pt-3 justify-center items-center px-4 mx-auto max-w-screen-xl  text-center  lg:px-12">
                <div class="flex relative transform
h-full
md:h-[58vh]

       ">


                    <img src="http://localhost:8002/prod/p28.jpg" alt="Your Image" class=" rounded-3xl bg-black object-cover w-full h-auto opacity-90  max-w-screen mx-auto ">

                </div>
            </div>

        </div>



     </section>

</div>
