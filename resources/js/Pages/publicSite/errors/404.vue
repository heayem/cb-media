<script>
import { Link } from "@inertiajs/vue3";
import { Icon } from "@iconify/vue";

export default {
  components: {
    Link,
    Icon,
  },
};
</script>
<template>
  <div class="page_404">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="text-center col-sm-10 col-sm-offset-1">
            <div class="four_zero_four_bg">
              <h1 class="text-center text-red-500">404</h1>
            </div>
            <div class="p-5 contant_box_404">
              <p class="italic text-m-h2">
                The page you are looking for is not available!
              </p>
              <div
                class="flex flex-col items-center justify-center max-w-lg gap-4 mx-auto sm:flex-row md:mt-8 lg:mt-10"
              >
                <Link
                  href="/"
                  class="relative inline-flex w-full border border-red-500 group focus:outline-none sm:w-auto"
                >
                  <span
                    class="inline-flex items-center self-stretch justify-center w-full px-4 py-2 font-bold text-center text-white uppercase transition-transform transform bg-red-500 text-d-h4 ring-1 ring-red-500 ring-offset-1 ring-offset-red-500 group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1"
                  >
                    Go to Home Page
                  </span>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.page_404 {
  padding: 40px 0;
  background: #fff;
  height: 100vh;
}
.page_404 img {
  width: 100%;
}
.four_zero_four_bg {
  background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
  height: 400px;
  background-position: center;
}
.four_zero_four_bg h1,
.four_zero_four_bg h3 {
  font-size: 80px;
}
.link_404 {
  color: #fff !important;
  padding: 10px 20px;
  background: #4431ac;
  margin: 20px 0;
  display: inline-block;
}
.contant_box_404 {
  margin-top: -50px;
}
</style>
