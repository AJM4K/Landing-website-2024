<footer class="p-4 bg-white md:p-8 lg:p-10 ">
    <div class="mx-auto max-w-screen-xl text-center">
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900



">
            <li>
                <a href={{ Route('home') }} class="mr-4 hover:underline md:mr-6 ">  @lang('messages.home') </a>
            </li>

            <li>
                <a href={{ Route('services') }} class="mr-4 hover:underline md:mr-6"> @lang('messages.services') </a>
            </li>
            <li>
                <a href={{ Route('about') }} class="mr-4 hover:underline md:mr-6">  @lang('messages.about_us') </a>
            </li>
            <li>
                <a href={{ Route('contact') }} class="mr-4 hover:underline md:mr-6">  @lang('messages.contact_us') </a>
            </li>

        </ul>
        <span class="text-sm text-gray-500 sm:text-center



">©{{date('Y')}} <a href={{ Route('home') }} class="hover:underline">@lang('messages.website_name')™</a>.  @lang('messages.all_rights').</span>
    </div>
</footer>
