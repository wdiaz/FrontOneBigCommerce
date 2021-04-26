<template>
  <div>
    <div class="row">
      <h1></h1>
      <h2>{{legend}}</h2>
    </div>
    <div class="row">
      <div
          v-for="product in products"
          :key="products['id']"
      >
        <p>{{product.sku}}</p><br/>
      </div>
    </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
  name: "catalog",
  components: {

  },
  data() {
    return {
      legend: 'shipping takes 12 weeks',
      products: [],
    };
  },
  async mounted() {
    const response = await axios.get('http://localhost:8081/products');
    this.products = response.data['_embedded'].products;


  },
}
</script>

<style scoped>

</style>
