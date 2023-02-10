<template>
  <div v-if="post" class="container mx-auto max-w-4xl py-6 px-3">
    <div class="text-gray-900 text-xl">Post By ID / {{ post.id }}</div>
    <div class="bg-green-500 w-full h-1 mb-4"></div>

    <div class="mx-auto">
      <div class="my-4">
        <div class="flex items-center py-2">
          <router-link :to="'/account/profile/' + post.user.id">
            <img class="rounded-full" width="50" />
          </router-link>
          <div class="ml-2 font-bold text-2xl">
            <router-link :to="'/account/profile/' + post.user.id">
              sdsd
            </router-link>
          </div>
        </div>
        <img class="w-full" :src="postStore.postImage(post.image)" alt="" />
        <div class="p-4">
          <p class="text-3xl font-bold hover:text-gray-700 pb-4">
            {{ post.title }}
          </p>
          <p class="py-2 text-lg">Event Location: sd</p>
          <p class="pb-6">ds</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";

let post = ref(null);
</script>
