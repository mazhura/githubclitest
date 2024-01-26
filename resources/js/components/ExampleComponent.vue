<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hello world 1 {{ counter }}</div>

                    <button @click="counter++">Click!</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
