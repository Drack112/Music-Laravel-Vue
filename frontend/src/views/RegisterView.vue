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
              label="Fist Name"
              :label-color="false"
              placeholder="John"
              v-model:input="firstName"
              error="This is an text error"
              input-type="text"
            />
            <TextInput
              label="Last Name"
              :label-color="false"
              placeholder="Lock"
              v-model:input="lastName"
              error="This is an text error"
              input-type="text"
            />

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

            <TextInput
              label="Confirm Password"
              :label-color="false"
              placeholder="supersecret"
              v-model:input="confirmpassword"
              error="This is an text error"
              input-type="password"
            />
            <button
              class="block w-full bg-green-500 text-white rounded-sm py-3 text-sm tracking-wide"
            >
              Register
            </button>
          </div>

          <p class="text-center text-md text-gray-900">
            Already have any account?
            <router-link
              to="login"
              class="text-blue-500 no-underline hover:underline"
            >
              Login
            </router-link>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import TextInput from "@/components/global/TextInput.vue";

import { ref } from "vue";

const firstName = ref(null);
const lastName = ref(null);
const email = ref(null);
const password = ref(null);
const confirmpassword = ref(null);
</script>
