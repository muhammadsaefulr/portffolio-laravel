@php
    $site_name = get_setting_value('_site_name');
    $location = get_setting_value('_location');
    $site_description = get_setting_value('_site_description');
    
    $linkedin = get_setting_value('_linkedin');
    $instagram = get_setting_value('_instagram');
    $github = get_setting_value('_github');
    
    $about = get_section_data('ABOUT');
    $project = get_project();
@endphp
<!DOCTYPE html>
<html class="scroll-smooth">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <title>Document</title>
</head>

<body class="bg-blue-950">
    <div class="absolute w-96 h-96 overflow-hidden blur-3xl z-0">
        <div class="absolute w-full h-full rotate-50 drop-shadow-2xl bg-gradient-to-r from-blue-500 rounded-full"></div>
    </div>

    <header class="text-white body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-bold items-center text-white mb-4 md:mb-0">
                <span class="ml-3 text-xl">Msaeful</span>
            </a>
            <nav
                class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base font-medium cursor-pointer justify-center">
                <a href="#about" class="mr-5 hover:text-indigo-500">About</a>
                <a href="#skills" class="mr-5 hover:text-indigo-500">Skills</a>
                <a href="#portfolio" class="mr-5 hover:text-indigo-500">Portfolio</a>
            </nav>
            <button class="inline-flex items-center bg-indigo-600 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/767px-WhatsApp.svg.png" width="30" height="30" alt="" srcset="">
            </button>
        </div>
    </header>

    <section class="text-gray-600 body-font" id="about">
        <div class="container mx-auto flex px-17 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-3/1 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-indigo-500">Hai !, Saya
                    <br class="hidden lg:inline-block">
                    <p class="font-medium text-[28px] text-white">{{ $about->title }}</p>
                    <p class="font-bold text-2xl text-white" id="typed"></p>
                </h1>
                <p class="mb-8 leading-relaxed text-indigo-200 w-4/5">{!! strip_tags($about->content) !!}</p>
                <div class="flex justify-center">
                    <a href="{{ $github }}">
                        <button
                            class="inline-flex text-white bg-indigo-200 border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded text-lg"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/c/c2/GitHub_Invertocat_Logo.svg"
                                width="30" height="30" alt="" srcset=""></button></a>
                    <a href="{{ $linkedin }}">
                        <button
                            class="ml-4 inline-flex text-white bg-indigo-200 border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded text-lg"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/2048px-LinkedIn_icon.svg.png"
                                width="30" height="30" srcset=""></button></a>
                    <a href="{{ $instagram }}">
                        <button
                            class="ml-4 inline-flex text-white bg-indigo-200 border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded text-lg"><img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/800px-Instagram_logo_2016.svg.png"
                                width="30" height="30" alt="" srcset=""></button></a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/3 w-1/2 mb-10 md:mb-0">
                <img class="object-cover object-center rounded-md" width="300" height="30" alt="hero"
                    src="{{ Storage::url($about->thumbnail) }}">
            </div>
        </div>
    </section>

    <section class="text-indigo-200 body-font" id="skills">
        <div class="container mx-auto py-24">

            <div class="text-center pb-24 mx-auto">
                <h1 class="text-indigo-200 text-[30px] font-medium pb-2">Skills</h1>
                <div class="h-1 w-[20%] bg-indigo-500 rounded mx-auto"></div>
                <p class="text-indigo-200 text-md font-medium pt-2">Teknologi Yang Saat Ini Saya Gunakan</p>
            </div>

            <div class="flex justify-center space-x-24">
                <div class="flex flex-col gap-8">
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="https://user-images.githubusercontent.com/98990/89711240-4172a200-d989-11ea-8d51-4aaf922fa407.png"
                            width="130" height="130" alt="" srcset=""></button>
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="data:image/png;base64,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"
                            width="130" height="130" alt="" srcset=""></button>
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="https://www.svgrepo.com/show/373632/go.svg"
                            width="130" height="130" alt="" srcset=""></button>
                </div>

                <div class="flex flex-col  gap-12 justify-center">
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="data:image/png;base64,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"
                            width="130" height="130" alt="" srcset=""></button>
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="data:image/png;base64,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"
                            width="130" height="130" alt="" srcset=""></button>
                </div>

                <div class="flex flex-col gap-8">
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="data:image/jpeg;base64,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"
                            width="130" height="130" alt="" srcset=""></button>
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/ISO_C%2B%2B_Logo.svg/800px-ISO_C%2B%2B_Logo.svg.png"
                            width="130" height="130" alt="" srcset=""></button>
                    <button
                        class="inline-flex text-white bg-white border-0 py-2 px-3 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg"><img
                            src="https://cdn-icons-png.flaticon.com/512/5968/5968292.png"
                            width="130" height="130" alt="" srcset=""></button>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font" id="portfolio">
      <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-white">PORTOFOLIO</h1>
                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                      </div>
                      <p class="lg:w-1/2 w-full leading-relaxed text-indigo-200">Berikut Ada Beberapa Projek Yang Saya
                        Buat,
                        Dengan TIM Maupun Pribadi </p>
                      </div>
                      @foreach ($project as $item)
                       <!-- Partner Modal {{$i = 1}}-->
                      <div class="flex flex-wrap -m-4 " id="portfolioModal{{$i}}" tabindex="-1" aria-labelledby="portfolioModal{{$i}}">
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src="{{Storage::url($item->thumbnail)}}" alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{$item->title}}</h2>
                            
                            <a href="{{$item->link}}">
                              <button class="inline-flex items-center bg-indigo-600 text-white border-0 py-1 px-2 focus:outline-none hover:bg-gray-200 rounded text-base mt-6 md:mt-0">Lihat Lebih Detail
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                                  <path d="M5 12h14M12 5l7 7-7 7"></path>
                              </svg>
                          </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
        $i++;
    @endphp
    @endforeach

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white pb-2">Kontak Aku</h1>
                    <div class="h-1 w-[20%] bg-indigo-500 rounded mx-auto"></div>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-white pt-2">Tanyakan Kepada Aku Apa Yang Ingin Kamu
                        Tanyakan</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 sm:none mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-indigo-200">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-indigo-200">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-indigo-200">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-white">Made With ^ Muhammad Saeful</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
<script>
    var typed = new Typewriter('#typed', {
        strings: ['Software Engineer', 'IT Support', 'MEVN Stack Dev'],
        autoStart: true,
        loop: true,
    });
</script>
