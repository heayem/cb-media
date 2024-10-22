<script>
import { Icon } from "@iconify/vue";
import { Link } from "@inertiajs/vue3";

export default {
  components: {
    Icon,
    Link,
  },
  props: {
    iconColor: { type: String, default: "" },
    textColor: { type: String, default: "" },
    menuColor: { type: String, default: "" },
    horizontalLine: { type: String, default: "" },
  },
};
</script>
<template>
  <div class="container-fluid">
    <hr
      :class="`h-[2px] w-full my-4 bg-${horizontalLine} border-0 rounded md:my-10 `"
    />
    <footer class="rounded-lg">
      <div class="grid items-center grid-cols-3 pb-10">
        <div
          :class="`flex flex-col lg:flex-row lg:space-x-5 space-y-4 pt-1 md:space-y-0 text-m-h3 md:text-d-h3 text-${menuColor} `"
        >
          <Link href="/contact">
            <h3 :class="`hover:text-${menuColor}`">{{ $t("contact") }}</h3>
          </Link>
          <Link href="/about-us">
            <h3 :class="`hover:text-${menuColor}`">{{ $t("aboutus") }}</h3>
          </Link>
        </div>
        <div :class="`text-${textColor} text-center text-m-h3 md:text-d-h3`">
          <p>{{ $t("copyright") }} © CB MEDIA {{new Date().getFullYear()}}</p>
        </div>
        <div class="text-white">
          <ul
            :class="`float-right grid grid-cols-2 gap-0 md:flex md:flex-row justify-end items-center text-${iconColor} `"
          >
            <li class="flex justify-start hover:skew-y-6">
              <a
                target="_blank"
                href="https://www.facebook.com/cbmedia318"
                class="hover:underline"
                title="facebook"
              >
                <Icon width="45" icon="jam:facebook-square" />
              </a>
            </li>
            <li class="flex justify-start hover:skew-y-6">
              <a
                target="_blank"
                href="https://www.youtube.com/@cbmedia318/videos"
                class="hover:underline"
                title="youtube"
              >
                <Icon width="45" icon="jam:youtube-square" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</template>
