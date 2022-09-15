<nav
class="top-0 fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-white border-b"
>
<div
  class="container px-4 mx-auto flex flex-wrap items-center justify-between"
>
  <div
    class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
  >
    <a
      class="text-slate-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
      href="/"
      ><img
      src="{{asset('images/rebirthrwclogo.png') }}"
      alt="Rebirth Ministry"
      class="mx-auto mb-0 h-10" /></a
    >
  </div>
  <div
    class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
    id="example-collapse-navbar"
  >
   
    <ul
      class="flex flex-col lg:flex-row list-none lg:ml-auto items-center"
    >
    <li>
      <a
      class="text-slate-700 text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase"
      href="{{ route('login') }}"
      >Login</a
    >
    </li>
      
      <li class="flex items-center">
        <a href="{{ route('register') }}" 
          class="text-white bg-pink-500 active:bg-pink-600 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
          type="button"
        >
        Register
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>