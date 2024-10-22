<script>
export const apiMixin = {
  data() {
    return {
      loading: true,
      apiData: null,
      publicApi: this.urlApi,
    };
  },
  methods: {
    async fetchData() {
      const apiUrl = this.publicApi;
      try {
        const response = await fetch(apiUrl);
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        this.loading = false;
        this.apiData = data.data;
      } catch (error) {
        console.error("Error fetching data:", error);
      }
    },
  },
};
</script>
