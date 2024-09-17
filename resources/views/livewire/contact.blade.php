<section class="bg-white  " >
    <div class="py-8 px-4 mx-auto max-w-screen-xl w-full  lg:px-12">
        <div class="flex flex-col items-center justify-center h-auto w-full text-center">
            <div class="text-3xl font-bold" dir="{{ session()->get('locale') == 'en' ? 'ltr' : 'rtl' }}">
                @lang('messages.contact_title')
            </div>
            <div class="text-gray-600 my-8 lg:w-3/5 w-full ">
                @lang('messages.contact_description')

            </div>


            <div wire:loading>
                Loading..
            </div>

            <div wire:loading.remove class="w-full flex items-center justify-center">
                @if($isSubmitted)
                    <div class="my-8">

                        <div class="w-12 h-12 rounded-full bg-green-100 p-2 flex items-center justify-center mx-auto mb-3.5">
                            <svg aria-hidden="true" class="w-8 h-8 text-green-500 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Success</span>
                        </div>
                        <p class="mb-4 text-lg font-semibold text-gray-900 ">@lang('messages.contact_form_submitted')</p>

                    </div>
                @else
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto" dir="{{ session()->get('locale') == 'en' ? 'ltr' : 'rtl' }}">
                        <!-- Modal content -->
                        <div class="relative p-4 bg-white rounded-lg   sm:p-5">
                            <!-- Modal header -->
                            <div
                                class="flex justify-between items-center pb-4 mb-4 rounded-t  sm:mb-5 ">
                                <div>
                                    *@lang('messages.contact_form_required')
                                </div>
                            </div>
                            <!-- Modal body -->
                            <form wire:submit="SubmitMessage">
                                <div class="flex flex-col  {{ session()->get('locale') == 'en' ? 'text-left' : 'text-right'}} gap-6 mb-4 sm:grid-cols-2">
                                    <div>
                                        <label for="name"
                                               class="isolate block mb-2 text-sm font-medium text-gray-900 "> @lang('messages.contact_form_title')</label>
                                        <input wire:model="title" maxlength="68" type="text" name="name" id="name" required=""
                                               class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  "
                                               placeholder= @lang('messages.contact_form_title') >
                                        <div>
                                            @error('title') <span class="error">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                    <div>
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 ">@lang('messages.contact_form_email') </label>
                                        <input wire:model="email" maxlength="68" type="text" name="brand" id="brand" required=""
                                               class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  "
                                               placeholder=@lang('messages.contact_form_email')  >
                                        <div>
                                            @error('email') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">@lang('messages.contact_form_phone') </label>
                                        <input wire:model="phone" maxlength="28" type="number" name="name" id="name" required=""
                                               class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full  "
                                               placeholder="+9647xxxxxx" >
                                        <div>
                                            @error('phone') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="description"
                                               class="block mb-2 text-sm font-medium text-gray-900 ">@lang('messages.contact_form_description')</label>
                                        <textarea wire:model="message" maxlength="1000" id="description" rows="4" required=""
                                                  class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                                                  placeholder=@lang('messages.contact_form_description') ></textarea>
                                        <div>
                                            @error('message') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"
                                        class="text-white px-6 py-3 inline-flex  items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg    text-center">

                                    @lang('messages.contact_form_submit')
                                </button>
                            </form>
                        </div>
                    </div>
                @endif
            </div>



</section>
