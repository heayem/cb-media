<script>
import { Link } from "@inertiajs/vue3";
import { Icon } from "@iconify/vue/dist/iconify.js";
export default {
  components: { Link, Icon },
  data() {
    return {
      activeTab: null,
      subMenu: null,
      show: false,
    };
  },
  props: {
    urlPage: String,
    activePage: String,
  },
  methods: {
    showMenu(show) {
      this.show = show;
    },
    setActiveTab(tabName) {
      this.activeTab = tabName;
    },
    toggleSubMenu(subMenu) {
      this.subMenu = this.subMenu === subMenu ? null : subMenu;
    },
  },
};
</script>

<template>
  <div class="pb-10 md:pt-[80px] sm:w-full md:w-[90%]">
    <div class="flex flex-row justify-between">
      <Link href="/">
        <div class="block w-20 h-20 rounded cursor-pointer md:hidden">
          <img
            class="rounded-lg"
            src="https://i.ibb.co/KzMxPth/CB-MEDIA-NO-CIRCLE.png"
            alt="Cb Media"
          />
        </div>
      </Link>
      <button
        class="block border-2 mt-2 border-white w-16 h-16 rounded cursor-pointer md:hidden hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200"
      >
        <Icon
          icon="material-symbols-light:menu-rounded"
          width="100%"
          @click="showMenu(!show)"
        />
      </button>
    </div>

    <div
      v-if="show"
      class="flex flex-col p-2 my-2 bg-gray-200 border-gray-200 rounded text-m-h2 md:hidden"
    >
      <div>
        <div class="flex items-center justify-between">
          <Link class="w-[50%]" href="/video-service">
            <h2
              class="text-gray-500 cursor-pointer"
              :class="{ active: activeTab === 'videos' }"
              @click="setActiveTab('videos')"
            >
              {{ $t("videoService") }}
            </h2>
          </Link>
          <div
            class="w-[50%] h-12 flex justify-end items-center cursor-pointer text-gray-500"
            @click="toggleSubMenu('videos')"
          >
            <Icon icon="material-symbols:arrow-forward-ios-rounded" />
          </div>
        </div>
        <div
          v-if="subMenu === 'videos'"
          class="p-2 text-gray-500 bg-gray-100 rounded text-m-h2"
        >
          <Link href="/video-service/event">
            <h3 class="hover:text-black">{{ $t("Event") }}</h3>
          </Link>
          <Link href="/video-service/commercial">
            <h3 class="hover:text-black">{{ $t("Commercial") }}</h3>
          </Link>
          <Link href="/video-service/documentary">
            <h3 class="hover:text-black">{{ $t("Documentary") }}</h3>
          </Link>
          <Link href="/video-service/livestream">
            <h3 class="hover:text-black">{{ $t("Live Strem") }}</h3>
          </Link>
          <Link href="/video-service/shortfilm">
            <h3 class="hover:text-black">{{ $t("Sort Film") }}</h3>
          </Link>
          <Link href="/video-service/travel">
            <h3 class="hover:text-black">{{ $t("Travel") }}</h3>
          </Link>
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between">
          <Link class="w-[50%]" href="/photo-service">
            <h2
              class="text-gray-500 cursor-pointer"
              :class="{ active: activeTab === 'photos' }"
              @click="setActiveTab('photos')"
            >
              {{ $t("photoService") }}
            </h2>
          </Link>
          <div
            class="w-[50%] h-9 flex justify-end items-center cursor-pointer text-gray-500"
            @click="toggleSubMenu('photos')"
          >
            <Icon icon="material-symbols:arrow-forward-ios-rounded" />
          </div>
        </div>
        <div
          v-if="subMenu === 'photos'"
          class="p-2 text-gray-500 cursor-pointer text-m-h2 bg-gray-100"
        >
          <Link href="/photo-service/event"><h3 class="hover:text-black">{{ $t("Event") }}</h3></Link>
          <Link href="/photo-service/commercial"
            ><h3 class="hover:text-black"> {{ $t("Commercial") }}</h3></Link
          >
          <Link href="/photo-service/documentary"
            ><h3 class="hover:text-black"> {{ $t("Documentary") }}</h3></Link
          >
          <Link href="/photo-service/studio"
            ><h3 class="hover:text-black">{{ $t("Studio") }}</h3></Link
          >
          <Link href="/photo-service/travel"
            ><h3 class="hover:text-black">{{ $t("Travel") }}</h3></Link
          >
          <Link href="/photo-service/product"
            ><h3 class="hover:text-black">{{ $t("Product") }}</h3>
          </Link>
        </div>
      </div>
      <Link href="/social-media-marketing">
        <h2
          class="inline-flex items-center text-gray-500 cursor-pointer"
          :class="{ active: activeTab === 'socialMedia' }"
          @click="setActiveTab('socialMedia')"
        >
          {{ $t("socialMediaMarketing") }}
        </h2>
      </Link>
      <Link href="/web-development">
        <h2
          class="inline-flex items-center text-gray-500 cursor-pointer"
          :class="{ active: activeTab === 'webDevelopment' }"
          @click="setActiveTab('webDevelopment')"
        >
          {{ $t("webDevelopment") }}
        </h2>
      </Link>
    </div>
    <div class="hidden space-y-4 text-d-h3 md:block">
      <div>
        <div class="flex items-center justify-between">
          <Link class="w-[80%]" href="/video-service">
            <h2
              class="inline-flex items-center text-gray-500 cursor-pointer"
              :class="activePage === 'activeVideo' ? 'active' : ''"
              @click="setActiveTab('videos')"
            >
              <Icon class="mr-2" width="30" icon="fluent:video-28-regular" />
              {{ $t("videoService") }}
            </h2>
          </Link>
          <div
            class="w-[20%] h-9 flex justify-end items-center cursor-pointer text-gray-500"
            @click="toggleSubMenu('videos')"
          >
            <Icon icon="material-symbols:arrow-forward-ios-rounded" />
          </div>
        </div>
        <div
          v-if="urlPage === 'videoService' || subMenu === 'videos'"
          class="p-2 text-gray-500 cursor-pointer text-d-h3"
        >
          <Link href="/video-service/event">
            <h3
              :class="activePage === 'videoEvents' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Event") }}
            </h3>
          </Link>
          <Link href="/video-service/commercial">
            <h3
              :class="activePage === 'videoCommercial' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Commercial") }}
            </h3>
          </Link>
          <Link href="/video-service/documentary">
            <h3
              :class="activePage === 'videoDocumentary' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Documentary") }}
            </h3>
          </Link>
          <Link href="/video-service/livestream">
            <h3
              :class="activePage === 'videoLiveStream' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Live Strem") }}
            </h3>
          </Link>
          <Link href="/video-service/shortfilm">
            <h3
              :class="activePage === 'videoShortFilm' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Sort Film") }}
            </h3>
          </Link>
          <Link href="/video-service/travel">
            <h3
              :class="activePage === 'videoTravel' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Travel") }}
            </h3>
          </Link>
        </div>
      </div>
      <div>
        <div class="flex items-center justify-between">
          <Link class="w-[80%]" href="/photo-service">
            <h2
              class="inline-flex items-center text-gray-500 cursor-pointer"
              :class="activePage === 'activeSrvices' ? 'active' : ''"
              @click="setActiveTab('photos')"
            >
              <Icon
                class="mr-2"
                width="30"
                icon="material-symbols-light:photo-auto-merge-outline-rounded"
              />
              {{ $t("photoService") }}
            </h2>
          </Link>
          <div
            class="w-[20%] h-9 flex justify-end items-center cursor-pointer text-gray-500"
            @click="toggleSubMenu('photos')"
            :class="{ active: activeTab === 'photos' }"
          >
            <Icon icon="material-symbols:arrow-forward-ios-rounded" />
          </div>
        </div>
        <div
          v-if="urlPage === 'photoService' || subMenu === 'photos'"
          class="p-2 text-gray-500 cursor-pointer text-d-h3"
        >
          <Link href="/photo-service/event"
            ><h3
              :class="activePage === 'photoEvents' ? 'active' : ''"
              class="hover:text-black"
            >
            {{ $t("Event") }}
            </h3></Link
          >
          <Link
            href="/photo-service/commercial"
            :class="activePage === 'photoCommercial' ? 'active' : ''"
            ><h3 class="hover:text-black">{{ $t("Commercial") }}</h3></Link
          >
          <Link
            href="/photo-service/documentary"
            :class="activePage === 'photoDocumentary' ? 'active' : ''"
            ><h3 class="hover:text-black">{{ $t("Documentary") }}</h3></Link
          >
          <Link
            href="/photo-service/studio"
            :class="activePage === 'photoStudio' ? 'active' : ''"
            ><h3 class="hover:text-black">{{ $t("Studio") }}</h3></Link
          >
          <Link
            href="/photo-service/travel"
            :class="activePage === 'photoTravel' ? 'active' : ''"
            ><h3 class="hover:text-black">{{ $t("Travel") }}</h3></Link
          >
          <Link
            href="/photo-service/product"
            :class="activePage === 'photoProduct' ? 'active' : ''"
            ><h3 class="hover:text-black">{{ $t("Product") }}</h3>
          </Link>
        </div>
      </div>
      <div>
        <Link href="/social-media-marketing">
          <h2
            class="inline-flex items-center text-gray-500 cursor-pointer"
            :class="activePage === 'activeSocial' ? 'active' : ''"
            @click="setActiveTab('socialMedia')"
          >
            <Icon class="mr-2" width="30" icon="uit:social-distancing" />
            {{ $t("socialMediaMarketing") }}
          </h2>
        </Link>
      </div>
      <div>
        <Link href="/web-development">
          <h2
            class="inline-flex items-center text-gray-500 cursor-pointer"
            :class="activePage === 'activeWeb' ? 'active' : ''"
            @click="setActiveTab('webDevelopment')"
          >
            <Icon class="mr-2" width="30" icon="fluent-mdl2:website" />
            {{ $t("webDevelopment") }}
          </h2>
        </Link>
      </div>
    </div>
  </div>
</template>

<style>
.active {
  font-weight: bold;
  color: #000;
}
</style>
