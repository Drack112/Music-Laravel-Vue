<template>
  <div class="bg-green-500 rounded">
    <div id="aplayer"></div>
  </div>
</template>

<script setup>
import { onMounted } from "vue";
import Aplayer from "aplayer";

import "aplayer/dist/APlayer.min.css";

onMounted(() => {
  thePlayer();
});

const thePlayer = () => {
  new Aplayer({
    container: document.getElementById("aplayer"),
    audio: [
      {
        name: "東方ボーカルENG SUBS】Calm and the Storm",
        artist: "A-ONE",
        url: "https://www.youtube.com/watch?v=JE1KdsgjI-Y",
        cover: "https://i.ytimg.com/vi/JE1KdsgjI-Y/maxresdefault.jpg",
      },
    ],
  });
};
</script>
