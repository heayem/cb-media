<script>
import PrimaryButton from "../button/PrimaryButton.vue";
import VLazyImage from "v-lazy-image";

export default {
  components: {
    PrimaryButton,
    VLazyImage,
  },
  props: {
    title: { type: String, default: "" },
    iconName: { type: String, default: "" },
    lgScreen: { type: String, default: "lg:grid-cols-3" },
    mdScreen: { type: String, default: "md:grid-cols-2" },
    button: { type: String, default: "" },
    hiddenButton: { type: String, default: "" },
    textColor: { type: String, default: "white" },
    fontSite: { type: String, default: "text-d-h2" },
    paddingTitle: { type: String, default: "" },
  },
};
</script>
<template>
  <div class="grid grid-cols-6 gap-4 text-center">
    <div class="col-start-1 col-end-7">
      <div
        class="z-10 w-full overflow-hidden transition duration-300 ease-in-out border-4 border-gray-200 rounded-xl group-hover:opacity-100 "
      >
        <VLazyImage
          src="image/team.jpg"
          class="block object-cover w-full h-full transition duration-300 transform scale-100 opacity-100 animate-fade-in group-hover:scale-110"
          alt="cb media"
        />
      </div>
    </div>
    <div class="col-start-1 col-end-7 text-center">
      <section>
        <PrimaryButton name="ViewTeam" viewMore="/cb-media-team" />
        <div class="pt-10">
          <h2 class="mb-4 font-bold tracking-tight text-gray-900 text-d-h2">
            {{ $t("ourPartners") }}
          </h2>
        </div>
      </section>
      <div class="flex justify-center">
        <div class="p-5">
          <div
            class="z-10 w-[100px] h-[100px] overflow-hidden transition duration-300 ease-in-out rounded-xl group-hover:opacity-100 "
          >
            <VLazyImage
              src="http://www.acmcertindochina.com/images/logo/19.png"
              class="block object-cover w-full h-full transition duration-300 transform scale-100 opacity-100 animate-fade-in group-hover:scale-110"
              alt="cb media"
            />
          </div>
        </div>
        <div class="p-5">
          <div
            class="z-10 w-[100px] h-[100px] overflow-hidden transition duration-300 ease-in-out rounded-xl group-hover:opacity-100 "
          >
            <VLazyImage
              src="image/newYumguru.png"
              class="block object-center w-full h-full transition duration-300 transform scale-100 opacity-100 animate-fade-in group-hover:scale-110"
              alt="cb media"
            />
          </div>
        </div>
        <div class="p-5">
          <div
            class="z-10 w-[100px] h-[100px] overflow-hidden transition duration-300 ease-in-out rounded-xl group-hover:opacity-100 "
          >
            <VLazyImage
              src="https://www.vecert.com/img/logos/HsgPF_ve cert.png"
              class="block object-cover w-full h-full transition duration-300 transform scale-100 opacity-100 animate-fade-in group-hover:scale-110"
              alt="cb media"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
