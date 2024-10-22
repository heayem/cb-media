<script>
export default {
  props: {
    name: String,
  },
};
</script>

<template>
  <button
    class="flex items-center gap-2 py-3 text-sm font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:px-6 disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none hover:bg-gray-900/10 active:bg-gray-900/20"
    type="button"
  >
    {{ name }}
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="2"
      stroke="currentColor"
      class="w-5 h-5"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"
      ></path>
    </svg>
  </button>
</template>
