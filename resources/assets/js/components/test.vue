<template>
<div id="app">
        <div class="box-demo-show">
            <b-dropdown>
                <figure slot="trigger">
                    <img src="./assets/buefy.png" width="94">
                </figure>

                <b-option>Action</b-option>
                <b-option>Another action</b-option>
                <b-option>Something else</b-option>

            </b-dropdown>

            <b-tooltip
            type="is-light"
            label="Tooltip large multilined, ..."
            position="is-bottom"
            multilined
            size="is-large"
            >
            <button class="button is-dark">Multiline (large)
            </button>
        </b-tooltip>
        <button class="button content is-success" 
        @click="success"
        >
            Toast (custom)
        </button>
</div>
</div>
</template>

<script type="text/babel">
export default {
  methods: {
    success () {
      this.$toast.open({
        message: 'Something happened correctly!',
        type: 'is-success'
      })
    }
  }
}
</script>