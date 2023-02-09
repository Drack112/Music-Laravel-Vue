<template>
  <div id="Register">
    <div class="w-full p-6 flex justify-center items-center">
      <div class="w-full max-w-xs">
        <div class="bg-black p-8 shadow rounded mb-6">
          <h1 class="mb-6 text-lg text-gray-100 font-thin">
            Let's get rocking!
          </h1>
          <div class="mb-4">
            <label
              class="block uppercase tracking-wide text-xs font-bold mb-2 text-gray-100"
              >First Name</label
            >
            <input
              class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              type="text"
            />
          </div>
          <span class="test-red-500"> This is an error message </span>

          <button
            class="block w-full bg-green-500 text-white rounded-sm py-3 text-sm tracking-wide"
          >
            Register
          </button>
        </div>

        <p class="text-center text-md text-gray-900">
          Dont' have any account yet?
          <router-link
            to="register"
            class="text-green-500 no-underline hover:underline"
          >
            Register
          </router-link>
        </p>
      </div>
    </div>
  </div>
</template>
