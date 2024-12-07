<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package truongtuan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?= site_url() . '/wp-content/themes/tuanpho/assets/css/tailwindcss.css' ?>">
</head>

<body <?php body_class('class="font-roboto"'); ?>>
  <?php wp_body_open(); ?>
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
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-1',
          'menu'            => '',
          'container'       => 'false',
          'menu_class'      => 'ul',
          'menu_id'         => 'nav-menu',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ));
        ?>
        id="nav-menu"
        class="h-full flex-row flex-nowrap items-center data-[justify=start]:justify-start data-[justify=start]:flex-grow data-[justify=start]:basis-0 data-[justify=center]:justify-center data-[justify=end]:justify-end data-[justify=end]:flex-grow data-[justify=end]:basis-0 hidden sm:flex gap-4">
        <!-- navbar -->
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
        <!-- end navbar -->
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