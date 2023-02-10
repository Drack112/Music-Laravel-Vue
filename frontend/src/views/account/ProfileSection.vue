<template>
  <div class="p-2">
    <div class="container max-w-4xl mx-auto flex">
      <div class="w-1/3">
        <img
          class="w-full rounded-lg h-auto shadow-lg"
          src="https://cdn.discordapp.com/avatars/341293823751618571/e7c7c0bc47ede017378e9749ec264ad4.png?size=1024"
          alt="Profile Pic"
        />
      </div>
      <div class="w-full pl-4">
        <div class="flex">
          <div class="w-1/2">
            <h1 class="text-2xl md:text-4xl text-left text-gray-900">
              John Doe
            </h1>
            <span class="text-md text-gray-700">
              <i><b>London, UK</b></i>
            </span>
          </div>

          <div class="w-1/2 mt-2">
            <RouterLinkButton
              btn-text="Edit Profile"
              color="green"
              url="/account/edit-profile"
            />
          </div>
        </div>
        <ProfileInfoSection />
        <ProfileAboutSection />
      </div>
    </div>
    <SongSection />
    <YoutubeVideosSection />
    <PostSection />
  </div>
</template>

<script setup>
import PostSection from "@/components/partials/profile/PostSection.vue";
import SongSection from "@/components/partials/profile/SongSection.vue";
import RouterLinkButton from "@/components/global/RouterLinkButton.vue";
import ProfileInfoSection from "@/components/partials/profile/ProfileInfoSection.vue";
import ProfileAboutSection from "@/components/partials/profile/ProfileAboutSection.vue";
import YoutubeVideosSection from "@/components/partials/profile/YoutubeVideosSection.vue";
</script>
