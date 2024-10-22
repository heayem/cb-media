<script>
import { Icon } from "@iconify/vue";
import { Link } from "@inertiajs/vue3";
import VLazyImage from "v-lazy-image";

export default {
  components: {
    Icon,
    Link,
    VLazyImage,
  },
  props: {
    hidden: { type: String, default: "hidden" },
    Position: { type: String, default: "absolute" },
    iconColor: { type: String, default: "" },
    textColor: { type: String, default: "white" },
  },
  methods: {
    changeLanguage(event) {
      const locale = event.target.value;
      this.$i18n.locale = locale;
      if (locale === "kh") {
        document.body.classList.add("font-khmer");
      } else {
        document.body.classList.remove("font-khmer");
      }
    },
  },
};
</script>
<template>
  <div :class="`w-full ${hidden} md:block md:${Position} z-20`">
    <div class="flex justify-between">
      <div class="text-white">
        <div class="flex flex-wrap items-center sm:mt-0">
          <Link href="/" class="hover:underline">
          <VLazyImage class="h-40 max-w-full rounded-lg" src="/image/cb_media.png" alt="image description" />
          </Link>
        </div>
      </div>
      <div class="text-white">
        <div>
          <label>
            <VLazyImage v-if="this.$i18n.locale === 'kh'" class="max-w-full mt-5 rounded-lg h-7" src="/image/cambodia.png"
              alt="image description" />
            <VLazyImage v-if="this.$i18n.locale === 'en'" class="max-w-full mt-5 rounded-lg h-7"
              src="/image/united-kingdom.png" alt="image description" />
          </label>
          <select @change="changeLanguage($event)"
            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 appearance-none border-gray-400 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option value="en" :selected="this.$i18n.locale === 'en'">
              English
            </option>
            <option value="kh" :selected="this.$i18n.locale === 'kh'">
              ខ្មែរ
            </option>
          </select>
        </div>
        <ul :class="`flex flex-wrap items-center pt-5 text-sm font-medium sm:mt-0`">
          <li class="mr-2 hover:skew-y-6">
            <a target="_blank" href="https://www.facebook.com/cbmedia318"
              class="text-xl font-semibold hover:underline md:mr-6" title="facebook">
              <Icon width="45" icon="jam:facebook-square" :color="iconColor"/>
            </a>
          </li>
          <li class="mr-2 hover:skew-y-6">
            <a target="_blank" href="https://www.youtube.com/@cbmedia318/videos"
              class="text-xl font-semibold hover:underline md:mr-6" title="youtube">
              <Icon width="45" icon="streamline:computer-logo-youtube-youtube-clip-social-video" :color="iconColor"/>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>
