<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bất động sản World Land Corp </title>
  <link rel="stylesheet" href="<?= site_url() . '/wp-content/themes/tuanpho/assets/css/tailwindcss.css' ?>">
  <link rel="icon" href="https://worldlandcorp.vn/favicon.ico" type="image/x-icon" sizes="132x134">
</head>

<body class="font-roboto">
  <nav
    class="flex z-40 w-full h-auto items-center justify-center data-[menu-open=true]:border-none sticky top-0 inset-x-0 border-b border-divider backdrop-blur-lg data-[menu-open=true]:backdrop-blur-xl backdrop-saturate-150 bg-background/70"
    style="--navbar-height:4rem">
    <header
      class="z-40 flex px-6 gap-4 w-full flex-row relative flex-nowrap items-center justify-between h-[var(--navbar-height)] max-w-[1024px]">
      <ul
        class="flex gap-4 h-full flex-row flex-nowrap items-center data-[justify=start]:justify-start data-[justify=start]:flex-grow data-[justify=start]:basis-0 data-[justify=center]:justify-center data-[justify=end]:justify-end data-[justify=end]:flex-grow data-[justify=end]:basis-0 sm:hidden"
        data-justify="start"><button
        id="open-close-menu"
          class="group flex items-center justify-center w-6 h-full rounded-small tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2"
          type="button" aria-label="Close menu" aria-pressed="true" style="user-select: none;" data-open="true"><span
            class="sr-only">close navigation menu</span><span
            class="w-full h-full pointer-events-none flex flex-col items-center justify-center text-inherit group-data-[pressed=true]:opacity-70 transition-opacity before:content-[''] before:block before:h-px before:w-6 before:bg-current before:transition-transform before:duration-150 before:-translate-y-1 before:rotate-0 group-data-[open=true]:before:translate-y-px group-data-[open=true]:before:rotate-45 after:content-[''] after:block after:h-px after:w-6 after:bg-current after:transition-transform after:duration-150 after:translate-y-1 after:rotate-0 group-data-[open=true]:after:translate-y-0 group-data-[open=true]:after:-rotate-45"></span></button>
      </ul>
      <ul
        class="flex gap-4 h-full flex-row flex-nowrap items-center data-[justify=start]:justify-start data-[justify=start]:flex-grow data-[justify=start]:basis-0 data-[justify=center]:justify-center data-[justify=end]:justify-end data-[justify=end]:flex-grow data-[justify=end]:basis-0 sm:hidden pr-3">
        <div
          class="basis-0 flex-grow flex-nowrap justify-start bg-transparent items-center no-underline text-medium whitespace-nowrap box-border dark:text-white flex flex-col">
          <a class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium text-primary no-underline hover:opacity-80 active:opacity-disabled transition-opacity"
            tabindex="0" role="link" href="#">
            <div class="relative shadow-black/5 shadow-none rounded-none" style="max-width:80px"><img
                src="https://worldlandcorp.vn/logo.svg"
                class="relative z-10 shadow-black/5 shadow-none transition-transform-opacity motion-reduce:transition-none !duration-300 rounded-none"
                width="80"><img src="https://worldlandcorp.vn/logo.svg"
                class="absolute z-0 inset-0 w-full h-full object-cover filter blur-lg scale-105 saturate-150 opacity-30 translate-y-1 rounded-none"
                width="80" aria-hidden="true"></div>
          </a>
        </div>
      </ul>
      <div
        class="basis-0 flex-row flex-grow flex-nowrap justify-start bg-transparent items-center no-underline text-medium whitespace-nowrap box-border hidden sm:flex dark:text-white gap-2">
        <a class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium text-primary no-underline hover:opacity-80 active:opacity-disabled transition-opacity"
          tabindex="0" role="link" href="#">
          <div class="relative shadow-black/5 shadow-none rounded-none" style="max-width:80px"><img
              src="https://worldlandcorp.vn/logo.svg"
              class="relative z-10 shadow-black/5 shadow-none transition-transform-opacity motion-reduce:transition-none !duration-300 rounded-none"
              width="80"><img src="https://worldlandcorp.vn/logo.svg"
              class="absolute z-0 inset-0 w-full h-full object-cover filter blur-lg scale-105 saturate-150 opacity-30 translate-y-1 rounded-none"
              width="80" aria-hidden="true"></div>
        </a>
      </div>
      <ul
        class="h-full flex-row flex-nowrap items-center data-[justify=start]:justify-start data-[justify=start]:flex-grow data-[justify=start]:basis-0 data-[justify=center]:justify-center data-[justify=end]:justify-end data-[justify=end]:flex-grow data-[justify=end]:basis-0 hidden sm:flex gap-4">
        <li class="text-medium whitespace-nowrap box-border list-none data-[active=true]:font-semibold"><a
            class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium no-underline hover:opacity-80 active:opacity-disabled transition-opacity text-green-800 font-bold uppercase"
            tabindex="0" role="link" href="#">Trang chủ</a></li>
        <li class="text-medium whitespace-nowrap box-border list-none data-[active=true]:font-semibold"><a
            class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium no-underline hover:opacity-80 active:opacity-disabled transition-opacity text-green-800 font-bold uppercase"
            tabindex="0" role="link" href="#">Sang nhượng</a></li>
        <li class="text-medium whitespace-nowrap box-border list-none data-[active=true]:font-semibold"><a
            class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium no-underline hover:opacity-80 active:opacity-disabled transition-opacity text-green-800 font-bold uppercase"
            tabindex="0" role="link" href="#">Thông tin dự án</a></li><a
          class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium text-primary no-underline hover:opacity-80 active:opacity-disabled transition-opacity"
          tabindex="0" role="link" href="#">
          <div
            class="relative max-w-fit inline-flex items-center justify-between box-border whitespace-nowrap px-2 h-8 text-medium rounded-full shadow-lg bg-default text-default-foreground bg-gradient-to-br from-green-500 to-yellow-500 border-small border-white/50 shadow-pink-500/30">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="max-h-[80%] w-6 h-6 text-white">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59">
              </path>
            </svg><span class="flex-1 font-normal px-2 pl-1 drop-shadow shadow-black text-white">Đăng tin sang
              nhượng</span>
          </div>
        </a>
      </ul>
      <ul
        class="flex gap-4 h-full flex-row flex-nowrap items-center data-[justify=start]:justify-start data-[justify=start]:flex-grow data-[justify=start]:basis-0 data-[justify=center]:justify-center data-[justify=end]:justify-end data-[justify=end]:flex-grow data-[justify=end]:basis-0"
        data-justify="end">
        <li
          class="text-medium whitespace-nowrap box-border list-none data-[active=true]:font-semibold flex items-center">
          <button
            class="z-0 group relative inline-flex items-center justify-center box-border appearance-none select-none whitespace-nowrap font-normal subpixel-antialiased overflow-hidden tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-small gap-unit-2 rounded-medium px-unit-0 !gap-unit-0 data-[pressed=true]:scale-[0.97] transition-transform-colors-opacity motion-reduce:transition-none min-w-unit-10 w-unit-10 h-unit-10 data-[hover=true]:opacity-hover"
            type="button" aria-level="Dark mode"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
              fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                clip-rule="evenodd"></path>
            </svg></button>
        </li>
      </ul>
    </header>
  </nav>
  <main>
    <section class="relative  flex flex-col items-center justify-center text-center text-white py-0 px-3">
      <div class="video-docker absolute top-0 left-0 w-full h-[300px] lg:h-[400px] overflow-hidden"><video
          class="min-w-full min-h-full absolute object-cover"
          src="https://sv.worldlandcorp.vn/wp-content/uploads/2022/07/Hero-BG-WL.mp4" type="video/mp4" autoplay=""
          muted="" loop=""></video></div>
      <div class="video-content py-28 lg:py-36">
        <h1 class="text-2xl lg:text-6xl font-bold">ĐẦU TƯ KHÔNG CÒN QUÁ KHÓ</h1>
        <h3 class="text-xl font-light lg:text-3xl italic">World Land Luôn Đồng Hành Cùng Bạn</h3>
      </div>
    </section>
    <section class="mt-5 py-2 lg:px-10 px-5">
      <div class="flex flex-col gap-4 justify-center mt-5 py-5 items-center">
        <div class="title">
          <h2 class="text-2xl uppercase font-bold text-green-800 dark:text-white text-center">Mua bán sang nhượng</h2>
          <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-3 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900"><svg
                class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 18 14">
                <path
                  d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z">
                </path>
              </svg></div>
          </div>
        </div>
        <div class="project grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5  lg:px-16">
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="#"><img class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://res.cloudinary.com/worldlandcorp/image/upload/v1700616479/worldlandcorp/ck2hvrm4gquybd8ebt8a.jpg"></a><a
              href="#">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">140 Lê Trọng Tấn, Tây
                Thạnh, Tân Phú, Sài Gòn</h3>
            </a>
            <div class="flex justify-between px-1">
              <div><span class="font-bold text-red-700"><strong>Giá bán: </strong> 500 triệu</span></div>
              <div><span class="font-bold text-red-700"><strong>Diện tích: </strong>605 m²</span></div>
            </div>
            <hr>
            <div class="flex gap-2 items-center">
              <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path>
                </svg></div>
              <p class="text-small">Trần Quốc Thảo, 3, Hồ Chí Minh</p>
            </div>
          </div>
        </div>
        <div class="mt-5 "><a href="#"><button
              class="bg-green-800 px-5 py-3 text-white rounded-xl hover:scale-90 duration-500 ease-in-out">Xem nhiều
              hơn</button></a></div>
      </div>
    </section>
    <section class="mt-5 py-2 lg:px-10 px-5">
      <div class="flex flex-col gap-4 justify-center mt-5 py-5 items-center">
        <div class="title">
          <h2 class="text-2xl uppercase font-bold text-green-800 dark:text-white text-center">Dự án bất động sản</h2>
          <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-3 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900"><svg
                class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 18 14">
                <path
                  d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z">
                </path>
              </svg></div>
          </div>
        </div>
        <div class="project grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5  lg:px-16">
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/ttxvn-2810-truc-duong-thuy-van-vung-tau-2-7244.jpg-1.webp"></a><a
              href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Bà Rịa-Vũng Tàu: Hơn
                1.000 tỷ đồng chỉnh trang trục đường Thùy Vân</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Bà Rịa-Vũng Tàu: Hơn 1.000 tỷ đồng chỉnh trang trục đường Thùy Vân Tổng Quan Dự Án Chỉnh Trang Đường Thùy
              Vân Với hơn 1.000 tỷ đồng đầu tư, dự án chỉnh trang đường Thùy Vân, trục đường chính dọc bãi biển Bãi Sau,
              là một bước tiến mới, mang lại nhiều cơ hội phát […]</p>
            </p>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/ttxvn-2810-truc-duong-thuy-van-vung-tau-2-7244.jpg-1.webp"></a><a
              href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Bà Rịa-Vũng Tàu: Hơn
                1.000 tỷ đồng chỉnh trang trục đường Thùy Vân</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Bà Rịa-Vũng Tàu: Hơn 1.000 tỷ đồng chỉnh trang trục đường Thùy Vân Tổng Quan Dự Án Chỉnh Trang Đường Thùy
              Vân Với hơn 1.000 tỷ đồng đầu tư, dự án chỉnh trang đường Thùy Vân, trục đường chính dọc bãi biển Bãi Sau,
              là một bước tiến mới, mang lại nhiều cơ hội phát […]</p>
            </p>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/ttxvn-2810-truc-duong-thuy-van-vung-tau-2-7244.jpg-1.webp"></a><a
              href="/ba-ria-vung-tau-hon-1-000-ty-dong-chinh-trang-truc-duong-thuy-van.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Bà Rịa-Vũng Tàu: Hơn
                1.000 tỷ đồng chỉnh trang trục đường Thùy Vân</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Bà Rịa-Vũng Tàu: Hơn 1.000 tỷ đồng chỉnh trang trục đường Thùy Vân Tổng Quan Dự Án Chỉnh Trang Đường Thùy
              Vân Với hơn 1.000 tỷ đồng đầu tư, dự án chỉnh trang đường Thùy Vân, trục đường chính dọc bãi biển Bãi Sau,
              là một bước tiến mới, mang lại nhiều cơ hội phát […]</p>
            </p>
          </div>
        </div>
        <div class="mt-5 "><a href="#"><button
              class="bg-green-800 px-5 py-3 text-white rounded-xl hover:scale-90 duration-500 ease-in-out">Xem nhiều
              hơn</button></a></div>
      </div>
    </section>
    <section class="mt-5 py-2 lg:px-10 px-5">
      <div class="flex flex-col gap-4 justify-center mt-5 py-5 items-center">
        <div class="title">
          <h2 class="text-2xl uppercase font-bold text-green-800 dark:text-white text-center">Kiến thức bất động sản
          </h2>
          <div class="inline-flex items-center justify-center w-full">
            <hr class="w-64 h-1 my-3 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900"><svg
                class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 18 14">
                <path
                  d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z">
                </path>
              </svg></div>
          </div>
        </div>
        <div class="project grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5  lg:px-16">
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/z5952038256325_8fbbbc05ea2f4b93dd31ab47892868f2.jpg?v=1729486994"></a><a
              href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Tổng Quan Dự Án Căn Hộ
                Global City – Biểu Tượng Kiến Trúc Hiện Đại</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Tổng Quan Dự Án Căn Hộ Global City – Biểu Tượng Kiến Trúc Hiện Đại Dự án Global City là một trong những
              dự án căn hộ cao cấp hàng đầu, nằm tại khu vực phát triển sôi động, mang đến cho cư dân trải nghiệm sống
              đẳng cấp và tiện nghi. Với thiết kế […]</p>
            </p>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/z5952038256325_8fbbbc05ea2f4b93dd31ab47892868f2.jpg?v=1729486994"></a><a
              href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Tổng Quan Dự Án Căn Hộ
                Global City – Biểu Tượng Kiến Trúc Hiện Đại</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Tổng Quan Dự Án Căn Hộ Global City – Biểu Tượng Kiến Trúc Hiện Đại Dự án Global City là một trong những
              dự án căn hộ cao cấp hàng đầu, nằm tại khu vực phát triển sôi động, mang đến cho cư dân trải nghiệm sống
              đẳng cấp và tiện nghi. Với thiết kế […]</p>
            </p>
          </div>
          <div
            class="flex flex-col  gap-3 border p-3 rounded-xl hover:scale-105 duration-700 ease-in-out hover:ring-2 ring-green-800 ring-inset">
            <a href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html"><img
                class="w-full lg:h-[250px] h-[200px] object-cover rounded-xl cursor-pointer"
                src="https://sv.worldlandcorp.vn/wp-content/uploads/2024/10/z5952038256325_8fbbbc05ea2f4b93dd31ab47892868f2.jpg?v=1729486994"></a><a
              href="/tong-quan-du-an-can-ho-global-city-bieu-tuong-kien-truc-hien-dai.html">
              <h3 class="text-2xl font-bold hover:text-green-800 cursor-pointer line-clamp-2 ">Tổng Quan Dự Án Căn Hộ
                Global City – Biểu Tượng Kiến Trúc Hiện Đại</h3>
            </a>
            <p class=" text-justify line-clamp-3">
            <p>Tổng Quan Dự Án Căn Hộ Global City – Biểu Tượng Kiến Trúc Hiện Đại Dự án Global City là một trong những
              dự án căn hộ cao cấp hàng đầu, nằm tại khu vực phát triển sôi động, mang đến cho cư dân trải nghiệm sống
              đẳng cấp và tiện nghi. Với thiết kế […]</p>
            </p>
          </div>
        </div>
        <div class="mt-5 "><a href="#"><button
              class="bg-green-800 px-5 py-3 text-white rounded-xl hover:scale-90 duration-500 ease-in-out">Xem nhiều
              hơn</button></a></div>
      </div>
    </section>
  </main>
  <footer class="footer footer-center p-5 bg-base-200 text-base-content rounded mb-16 lg:mb-0 dark:bg-black border-t-1">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 ">
      <div class="p-5 col-span-2">
        <h4 class="text-xl uppercase font-bold select-none">CÔNG TY BẤT ĐỘNG SẢN WORLD LAND CORP</h4>
        <p class=" text-justify mt-5 select-none">World Land là công ty đi đầu trong lĩnh vực Bất Động Sản, đi đầu về
          phong cách năng động, môi trường làm việc thân thiện chia sẻ, uy tín trong công việc, sáng tạo trong kinh
          doanh.</p>
        <ul class="list-none">
          <li class="mt-5 border-b-1 p-2 rounded-xl w-fit"><a class="flex items-center gap-4"><strong>Văn phòng:
              </strong>383 Đ. Nguyễn Duy Trinh, P. Bình Trưng Tây, TP. Thủ Đức, TP. Hồ Chí Minh</a></li>
          <li class="mt-5  p-2 border-b-1 w-fit rounded-xl"><a class="flex items-center gap-4"><strong>Email:
              </strong>worldlandcorporation@gmail.com</a></li>
          <li class="mt-5  p-2 border-b-1 w-fit rounded-xl"><a class="flex items-center gap-4"><strong>Hotline:
              </strong>0939703355</a></li>
        </ul>
      </div>
      <div class="p-5 col-span-2 lg:col-span-1">
        <div class="border-green-800 border-dashed border-2 p-5 rounded-xl">
          <h4 class="uppercase font-bold text-left">Danh mục đầu tư</h4>
          <ul class="list-disc list-inside mt-2">
            <li><a>Bất động sản Hồ Chí Minh</a></li>
            <li><a>Bất động sản Miền Bắc</a></li>
            <li><a>Bất động sản Miền Trung</a></li>
            <li><a>Bất động sản Miền Nam</a></li>
          </ul>
        </div>
        <div class="mt-5 border-green-800 border-dashed border-2 p-3 rounded-xl">
          <h4 class="uppercase font-bold">Chính sách điều khoản</h4>
          <ul class=" list-disc list-inside mt-5">
            <li><a>Điều khoản điều kiện</a></li>
            <li><a>Chính sách bảo mật</a></li>
          </ul>
        </div>
      </div>
      <div class="px-5"><iframe
          src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fworldlandcorporation&amp;width=340&amp;height=331&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=1094226537816625"
          width="300" height="131" style="border:none;overflow:hidden"
          allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe><iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15677.351873961621!2d106.7485022!3d10.7854061!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527085f4caf81%3A0x5d3d60d5a6a295ed!2sWorld%20Land%20Corp!5e0!3m2!1svi!2s!4v1697184856484!5m2!1svi!2s"
          width="300" height="150" style="border:0" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
    <div class="flex justify-center my-2 pt-5 border-t-1 gap-2 mt-10 items-center">
      <p class="text-xs">Copyright © 2023 - Made with </p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
        fill="currentColor" class="w-6 h-6 text-red-500 animate-pulse">
        <path
          d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
        </path>
      </svg>
      <p class="text-xs">Bất Động Sản</p>
    </div>
  </footer>
  <ul class="fixed bottom-5 left-5">
    <li class="hotline mb-2"><a href="tel:0930703355" target="_blank" aria-label="Hotline"><img
          class="w-10 rounded-lg hover:scale-125 duration-300 animate-bounce" src="/src/assets/img/OIP-2.jfif"
          alt=""></a></li>
    <li class="zalo"><a href="https://zalo.me/0939703355" target="_blank" rel="nofollow" aria-label="Chat Zalo"><img
          class="w-10 rounded-lg hover:scale-125 duration-300" src="/src/assets/img/OIP.jfif" alt=""></a>
    </li>
  </ul>
  <ul id="menuu"
    class="sm:hidden block z-30 px-6 pt-2 fixed max-w-full top-[var(--navbar-height)] inset-x-0 bottom-0 w-screen flex-col gap-2 overflow-y-auto backdrop-blur-xl backdrop-saturate-150 bg-background/70"
    style="--navbar-height: 4rem; height: calc(100vh - var(--navbar-height) - 1px);">
    <li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
        class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
        tabindex="0" role="link" href="#">Giới thiệu</a></li>
    <li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
        class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
        tabindex="0" role="link" href="#">Thông tin dự án</a></li>
    <li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
        class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
        tabindex="0" role="link" href="#">Blog</a></li>
    <li class="mb-2 text-large data-[active=true]:font-semibold" data-open="true"><a
        class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-large text-foreground no-underline hover:opacity-80 active:opacity-disabled transition-opacity w-full hover:text-blue-600"
        tabindex="0" role="link" href="#">Liên hệ</a></li><a
      class="relative inline-flex items-center tap-highlight-transparent outline-none data-[focus-visible=true]:z-10 data-[focus-visible=true]:outline-2 data-[focus-visible=true]:outline-focus data-[focus-visible=true]:outline-offset-2 text-medium text-primary no-underline hover:opacity-80 active:opacity-disabled transition-opacity"
      tabindex="0" role="link" href="/dashboard">
      <div
        class="relative max-w-fit inline-flex items-center justify-between box-border whitespace-nowrap px-2 h-8 text-medium rounded-full shadow-lg bg-default text-default-foreground bg-gradient-to-br from-green-500 to-yellow-500 border-small border-white/50 shadow-pink-500/30">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          class="max-h-[80%] w-6 h-6 text-white">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59">
          </path>
        </svg><span class="flex-1 font-normal px-2 pl-1 drop-shadow shadow-black text-white">Đăng tin</span>
      </div>
    </a>
  </ul>
  <script>
    const button = document.getElementById("open-close-menu");
    const menu = document.getElementById("menuu");
    button.addEventListener("click", () => {
      menu.classList.toggle("hidden");
    });
  </script>
</body>

</html>