<?php

/**
 * Header Navigation Template
 * 
 * @package Aquarius Theme
 */
?>

<!-- Desktop Navbar -->
  <nav class="fixed top-8 left-0 right-0 z-50 px-4 py-4 flex justify-between items-center bg-gray-100 shadow-sm">
    <!-- Site Logo -->
    <a class="text-2xl font-bold leading-none hover:text-emerald-500 transition duration-200" href="<?php echo home_url(); ?>">
      <?php echo get_bloginfo('name'); ?>
    </a>
    <!-- Mobile Menu Button -->
    <div class="lg:hidden">
      <button class="navbar-burger flex items-center text-emerald-600 p-3" id="open-sidebar">
        <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Mobile menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
        </svg>
      </button>
    </div>
    <!-- Desktop Menu -->
    <ul class="hidden lg:mx-auto lg:flex lg:items-center lg:w-auto lg:gap-6">
      <!-- Menu Item -->
      <li><a class="text-sm text-gray-400 hover:text-gray-500 transition duration-200" href="#">Home</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500 transition duration-200" href="#">About Us</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500 transition duration-200" href="#">Services</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500 transition duration-200" href="#">Pricing</a></li>
      <li><a class="text-sm text-gray-400 hover:text-gray-500 transition duration-200" href="#">Contact</a></li>
    </ul>
    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="hidden lg:inline-block">
      <input class="border-2 border-gray-300 rounded-md p-2 ring-0 focus:ring-0 focus:border-emerald-500 focus:outline-none" type="text" name="s" placeholder="Search..." required>
      <button class="bg-emerald-500 text-white px-4 py-2 rounded-md hover:bg-emerald-600 transition duration-200" type="submit">Search</button>
    </form>
  </nav>

<!-- Mobile Navbar - Drawer -->
<div class="navbar-menu relative z-50 hidden">
  <!-- Backdrop -->
  <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-0 transition-all duration-300 ease-in-out"></div>
  <!-- Sidebar Menu -->
  <nav class="fixed top-0 left-0 bottom-0 min-h-screen overflow-y-auto transition-transform transform -translate-x-full z-50 ease-in-out duration-300 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r"
    id="sidebar">
    <!-- Header -->
    <div class="flex items-center my-8">
      <!-- Logo -->
      <a class="mr-auto text-3xl font-bold leading-none hover:text-emerald-500 transition duration-200" href="<?php echo home_url(); ?>">
        <?php echo get_bloginfo('name'); ?>
      </a>
      <!-- Close Button -->
      <button class="navbar-close">
        <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
    <!-- Menu Items -->
    <div>
      <ul>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-emerald-50 hover:text-emerald-600 rounded" href="#">Home</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-emerald-50 hover:text-emerald-600 rounded" href="#">About Us</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-emerald-50 hover:text-emerald-600 rounded" href="#">Services</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-emerald-50 hover:text-emerald-600 rounded" href="#">Pricing</a>
        </li>
        <li class="mb-1">
          <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-emerald-50 hover:text-emerald-600 rounded" href="#">Contact</a>
        </li>
      </ul>
    </div>
    <!-- Footer -->
    <div class="mt-auto">
      <div class="pt-6">
        <!-- Search Form -->
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="flex gap-2">
          <input class="border-2 border-gray-300 rounded-md p-2 ring-0 focus:ring-0 focus:border-emerald-500 focus:outline-none w-full" type="text" name="s" placeholder="Search..." required>
          <button class="bg-emerald-500 text-white px-4 py-2 rounded-md hover:bg-emerald-600 transition duration-200" type="submit">Search</button>
        </form>
      </div>
      <!-- Copyright -->
      <p class="my-4 text-xs text-center text-gray-400">
        <span>Copyright © 2025 Aquarius Theme</span>
      </p>
    </div>
  </nav>
</div>