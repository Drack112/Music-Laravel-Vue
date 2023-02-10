<template>
  <div class="container max-w-4xl mx-auto flex">
    <div class="w-1/3">
      <img
        class="w-full rounded-lg h-auto shadow-lg"
        src="https://via.placeholder/500"
        alt="Profile Pic"
      />
    </div>
    <div class="w-full pl-4">
      <div class="flex">
        <div class="w-1/2">
          <h1 class="text-2xl md:text-4xl text-left text-gray-900">John Doe</h1>
          <span class="text-md text-gray-700">
            <i><b>London, UK</b></i>
          </span>
        </div>

        <div class="w-1/2 mt-2">
          <router-link
            class="float-right bg-transparent text-gray-900 hover:text-white py-2 px-4 border hover:border-transparent rounded hover:bg-green-500 border-green-500"
            to=""
            >Edit Profile</router-link
          >
        </div>
      </div>
      <ProfileInfoSection />
      <ProfileAboutSection />
    </div>
  </div>
</template>

<script setup>
import ProfileInfoSection from "@/components/partials/profile/ProfileInfoSection.vue";
import ProfileAboutSection from "@/components/partials/profile/ProfileAboutSection.vue";
</script>
