<template>
  <div class="container mx-auto max-w-4xl py-6 px-3">
    <div class="text-gray-900 text-xl">Posts</div>
    <div class="bg-green-500 w-full h-1 mb-4"></div>

    <div class="mx-auto">
      <div v-for="post in posts" :key="post" class="my-4">
        <div class="flex items-center py-2">
          <router-link :to="'/account/profile/' + post.user.id">
            <img class="rounded-full" width="50" />
          </router-link>
          <div class="ml-2 font-bold text-2xl">
            <router-link :to="'/account/profile/' + post.user.id">
              Aoba
            </router-link>
          </div>
        </div>
        <img class="w-full" alt="" />
        <div class="p-4">
          <p class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ post.title }}
          </p>
          <p class="py-2 text-lg">Event Location: Madri</p>
          <p class="pb-6">Description</p>
        </div>
      </div>

      <div class="flex items-center justify-center p-2">
        <v-pagination
          class="p-10"
          v-model="page"
          :pages="pageCount"
          :range-size="1"
          active-color="#337aff"
        />
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

let page = ref(1);
let posts = ref(null);
let pageCount = ref(null);
</script>
