<template>
  <div id="Register">
    <div class="w-full p-6 flex justify-center items-center">
      <div class="w-full max-w-xs">
        <div class="bg-black p-8 shadow rounded mb-6">
          <h1 class="mb-6 text-lg text-gray-100 font-thin">
            Let's get rocking!
          </h1>
          <div class="mb-4">
            <TextInput
              label="Email"
              :label-color="false"
              placeholder="superdj@email.com"
              v-model:input="email"
              error="This is an text error"
              input-type="text"
            />

            <TextInput
              label="Password"
              :label-color="false"
              placeholder="supersecret"
              v-model:input="password"
              error="This is an text error"
              input-type="password"
            />
          </div>

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

<script setup>
import TextInput from "@/components/global/TextInput.vue";

import { ref } from "vue";

const email = ref(null);
const password = ref(null);
</script>
