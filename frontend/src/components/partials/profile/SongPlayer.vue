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
    audio: [],
  });
};
</script>
