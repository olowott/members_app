<x-layout>

<div class="flex justify-center h-screen">
    @include('partials._side')
    <!-- form section start  -->
    {{-- <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6"> --}}
    <div class="flex items-center w-full px-6 mx-auto max-w-3xl lg:w-1/2 ">
      <div class="flex-1">
        <img
          src="{{asset('images/rebirthrwclogo.png') }}"
          alt="Rebirth Ministry"
          class="mx-auto mb-6 w-48"
        />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-700">Login</h1>
          <p class="mt-3 text-gray-500">Sign in to access your account</p>
        </div>

        <div class="mt-8">
          <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label for="email" class="label">Email Address</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@example.com"
                class="input-full"
              />
            </div>

            <div class="mt-6">
              <div class="flex justify-between mb-2">
                <label for="password" class="label">Password</label>
                <a href="#" class="link-small">Forgot password?</a>
              </div>

              <input
                type="password"
                name="password"
                id="password"
                placeholder="Your Password"
                class="input-full"
              />
            </div>

            <div class="mt-6">
              <button class="button-full">Sign in</button>
            </div>
            </div>
          </form>

          <p class="mt-6 text-sm text-center text-gray-400">
            Havent registered ?, you can become
            <a href="#" class="link-small">a member via this link</a>.
          </p>
        </div>
      </div>
    </div>
    <!-- form section end  -->
  </div>

</x-layout>