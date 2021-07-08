


<template>

<div class="container">

<div class="d-flex w-100 mx-auto align-items-center" >




                <div class="card card-body mt-5">
<p class="text-center text-muted mb-3 mt-3 h2">Upload the achivement Company</p>

                    <div>

                        <div v-if="success != ''" class="alert alert-success">
                            {{success}}
                        </div>

                        <form @submit="formSubmit" enctype="multipart/form-data">
                            <input type="file" class="form-control mb-3" v-on:change="onChange">

                            <button class="btn btn-primary btn-block">Upload</button>

                        </form>
                    </div>
                </div>
</div>
</div>

</template>

<script>
    export default {
        data() {
            return {
                file: '',
                success: ''
            };
        },
        methods: {
            onChange(e) {
                this.file = e.target.files[0];
            },
            formSubmit(e) {
                e.preventDefault();
                let existingObj = this;

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                let data = new FormData();
                data.append('file', this.file);



                axios.post('/Achivementfile', data, config)
                    .then(function (res) {
                        existingObj.success = res.data.success;

        location.reload();
this.$store.dispatch("loadUser");
        this.$router.push({ name: "Dashboard" });
                    })
                    .catch(function (err) {
                        existingObj.output = err;
                    });
            }
        }
    }

</script>
