/**
 * <!-- Gestion des Effets de Bord -->

<template>
  <div>
    <p>Heure actuelle : {{ time }}</p>
  </div>
</template>

<script>
import { ref, onMounted, onUnmounted } from 'vue';

export default {
    setup() {
        const time = ref(new Date().toLocaleTimeString());

        const updateTime = () => {
            time.value = new Date().toLocaleTimeString();
        };

        onMounted(() => {
            const interval = setInterval(updateTime, 1000);
            onUnmounted(() => clearInterval(interval));
        });

        return { time };
    }
}
</script>

 */