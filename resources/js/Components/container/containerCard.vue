<script>
import PrimaryButton from "../button/PrimaryButton.vue";
export default {
  components: {
    ReadMore: PrimaryButton,
  },
  props: {
    title: { type: String, default: "" },
    lgScreen: { type: String, default: "lg:grid-cols-3" },
    mdScreen: { type: String, default: "md:grid-cols-2" },
    button: { type: String, default: "" },
    hiddenButton: { type: String, default: "" },
    textColor: { type: String, default: "white" },
    fontSite: { type: String, default: "text-m-h1 lg:text-d-h1 md:text-d-h2 sm:text-d-h2"},
    paddingTitle: { type: String, default: "" },
    moreViewLink: { type: String, default: "" },
    target: { type: String, default: "" },
  },
};
</script>
<template>
  <div class="w-full">
    <div :class="`w-full space-y-1 ${paddingTitle} text-${textColor} ${fontSite}`">
      <div :class="`w-full ${fontSite} text-start`">
        <h2 class="uppercase">
          {{ $t(title) }}
        </h2>
      </div>
      <hr :class="`h-[5px] ${hiddenButton}`" />
    </div>
    <div
      :class="`grid gap-2 md:gap-5 grid-cols-1 md:grid-cols-1 ${lgScreen} ${mdScreen} `"
    >
      <slot />
    </div>
    <div :class="`flex justify-center w-full  ${paddingTitle} ${hiddenButton}`">
      <ReadMore :viewMore="`${moreViewLink}`" name="View Mores" :target="target" />
    </div>
  </div>
</template>
