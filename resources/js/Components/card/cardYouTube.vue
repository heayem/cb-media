<script>
export default {
    props: {
        videoSrc: String,
    },
};
</script>
<template>
    <iframe width="100%" height="350px" class="rounded" :src="videoSrc" />
</template>
