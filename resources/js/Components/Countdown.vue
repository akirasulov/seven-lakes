<template>
    <div>
        <p>{{ __("countdown.start") }}:</p>
        <p>
            {{ days }} {{ __("countdown.days") }}, {{ hours }}:{{ minutes }}:{{
                seconds
            }}
        </p>
    </div>
</template>
<script setup>
import { ref, computed, onMounted, onUnmounted } from "vue";

const countdownDate = new Date("2023-09-02T08:00:00Z");
const currentTime = ref(new Date());
function padZero(num) {
    if (num < 10) {
        return "0" + num;
    } else {
        return num;
    }
}

const days = computed(() => {
    const timeDiff = countdownDate - currentTime.value;
    return padZero(Math.floor(timeDiff / (1000 * 60 * 60 * 24)));
});

const hours = computed(() => {
    const timeDiff = countdownDate - currentTime.value;
    return padZero(
        Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
    );
});

const minutes = computed(() => {
    const timeDiff = countdownDate - currentTime.value;
    return padZero(Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60)));
});

const seconds = computed(() => {
    const timeDiff = countdownDate - currentTime.value;
    return padZero(Math.floor((timeDiff % (1000 * 60)) / 1000));
});

const updateCurrentTime = () => {
    currentTime.value = new Date();
};

onMounted(() => {
    // Update the current time every second
    setInterval(updateCurrentTime, 1000);
});

onUnmounted(() => {
    // Clear the interval when the component is unmounted
    clearInterval(updateCurrentTime);
});
</script>
