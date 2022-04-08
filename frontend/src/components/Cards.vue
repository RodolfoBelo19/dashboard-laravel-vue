<template>
    <div class="container_card">
        <div class="card">
            <div class="content_top">
                <span>{{ type }}</span>
                <span><i class="fa fa-arrow-up"></i>{{ percentual }}%</span>
            </div>
            <div class="content_footer">
                <i class="icon" :class="['fa', icon]"></i>
                <span class="qtd">{{ qtd }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Cards",
    props: {
        type: String,
        percentual: Number,
        icon: String,
        qtd: Number,
    }
}
</script>

<style scoped>

.container_card {
    display: flex;
    width: 100%;
}

.card {
    margin: 10px 10px;
    padding: 20px;
    width: 100%;
    background: rgb(243, 242, 242);
}

.content_top {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin-bottom: 15px;
}

.content_footer {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.content_footer > .icon {
    font-size: 30px;
}

.content_footer > .qtd {
    font-size: 25px;
}

</style>