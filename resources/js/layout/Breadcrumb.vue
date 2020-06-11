<template>
    <div class="breadcrumbbar">
        <div class="row align-items-center">
            <div class="col-md-8 col-lg-8">
                <h4 class="page-title">{{ this.$route.path.split('/').pop().toUpperCase() }}</h4>
                <div class="breadcrumb-list">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/front/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ this.$route.path.split('/').pop().toUpperCase() }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: 'Breadcrumb'
    }
</script>